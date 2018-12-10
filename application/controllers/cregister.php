<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class clogin extends CI_Controller 
{

	

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	    $this->load->helper(array('Form', 'Cookie', 'String'));
	    $this->load->library('session');
	    session_destroy();
	}

	public function index()
	{
		if(count($_COOKIE) > 0) 
		{
		 	$cookie_name = 'setcookie';
			$user=$_COOKIE[$cookie_name];

			//model db
			$data=array('username'=>$user);
			$this->load->model('model_login');//load model user
			$hasil = $this->model_login->cek_cookie($data);//cek data array

			$nr=$hasil->num_rows();

			if($nr==1)
			{
				foreach($hasil->result() as $dt)
				{
				  $sess_dt['username'] = $dt->username;
				  $sess_dt['password'] = $dt->password;
				  $sess_dt['kelas']    = $dt->kelas;
				  $this->session->set_userdata($sess_dt);
				}
				if($this->session->userdata('kelas')=='ADMIN') 
				{
					$user=$this->session->userdata('username');
					$dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
					foreach ($dbuser as $value)
					{}

					$data=array("nama"=>$value->nama,"username"=>$value->username,"image"=>$value->image,"kelas"=>$value->kelas);
					$this->load->view('sidebar',$data);
					$this->load->view('dashboard');
				}
				elseif($this->session->userdata('kelas')=='SUPERADMIN') 
				{
				  	$user=$this->session->userdata('username');
					$dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
					foreach ($dbuser as $value){}
					$data=array("nama"=>$value->nama,"image"=>$value->image,"kelas"=>$value->kelas);
					//$this->load->view('halaman_superadmin',$data);
				}
			}
		} 
		else 
		{
			//no cookie relogin
		    $this->load->view("page_login");
		}
	}

	public function login()
	{
		$this->index();
	}

	public function register()
	{
		session_start();
		session_destroy();
		$this->load->view("page_register");
	}
	

	

	//OCTOPUS
	public function sidebar()
	{
		$user = $_GET['username'];
		$query=$this->db->query("SELECT * FROM user WHERE username='".$user."' ")->result();
		foreach ($query as $x){}

		$data=array("nama"=>$x->nama,"username"=>$x->username,"image"=>$x->image,"kelas"=>$x->kelas);
		$this->load->view('sidebar',$data);
		$this->load->view('dashboard');
	}

	


  public function vallogin()
  {
    $user = $this->input->post('username');
    $pwd=$this->input->post('password');
    $md5=md5($pwd);
    $pass=crypt($md5,"salt");
    $remember=$this->input->post("remember");

    $cek_user=$this->db->query("SELECT * FROM user WHERE username='$user' && password='$pass' ")->num_rows();

    if($remember=="on")
    {
		$cookie_name = 'setcookie';
		$cookie_user = $user;

		if(!isset($_COOKIE[$cookie_name]))//jika tidak set cookie
		{
			setcookie($cookie_name,$cookie_user ,time() + (86400 * 30), "/"); //set cookies
			$query=$this->db->query("SELECT * FROM user WHERE username='$user' ")->num_rows();

			if(!preg_match("/^[a-z0-9]/",$user))
			{
				echo  '<script language="javascript">
				alert ("username tidak sesuai.");
				window.location="redi_login";
				</script>';
			}
			else
			{
				//model db
				$data=array('username'=>$user);
				$this->load->model('model_login');//load model user
				$hasil = $this->model_login->cek_cookie($data);//cek data array
				$nr=$hasil->num_rows();

				if($nr==1)//cek data
				{
				foreach($hasil->result() as $dt)
				{
				$sess_dt['username'] = $dt->username;
				$sess_dt['password'] = $dt->password;
				$sess_dt['kelas']    = $dt->kelas;
				$this->session->set_userdata($sess_dt);
			}

			if($this->session->userdata('kelas')=='ADMIN') 
			{
				$user=$this->session->userdata('username');
				$dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();

				foreach ($dbuser as $value)
				{}
				$data=array("nama"=>$value->nama,"username"=>$value->username,"image"=>$value->image,"kelas"=>$value->kelas);
				$this->load->view('sidebar',$data);
				$this->load->view('dashboard');
			}
        }//end

	}
	else
	{
		redirect('fp_index/index');
	}
    }
    else
    {
      //session
      $this->ses_login();
    }
    
  }//end

	public function ses_login()
	{
		$user = $this->input->post('username');
		$pwd=$this->input->post('password');
		$md5=md5($pwd);
		$pass=crypt($md5,"salt");

		if(!preg_match("/^[a-z0-9]/",$user))
		{
		  echo  '<script language="javascript">
		  alert ("username tidak sesuai.");
		  window.location="redi_login";
		  </script>';
		}
		else
		{
		  //model db
		  $data=array('username'=>$user);
		  $this->load->model('model_login');//load model user
		  $hasil = $this->model_login->cek_cookie($data);//cek data array
		  $nr=$hasil->num_rows();

		  if($nr==1)
		  {
		    foreach($hasil->result() as $dt)
		    {
		      $sess_dt['username'] = $dt->username;
		      $sess_dt['password'] = $dt->password;
		      $sess_dt['kelas']    = $dt->kelas;
		      $this->session->set_userdata($sess_dt);
		    }
		   
		    if($this->session->userdata('kelas')=='ADMIN') 
		    {
		      $user=$this->session->userdata('username');
		      $dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();

		      foreach ($dbuser as $value){}
		      $data=array("nama"=>$value->nama,"username"=>$value->username,"image"=>$value->image,"kelas"=>$value->kelas);
		      $this->load->view('sidebar',$data);
		      $this->load->view('dashboard');
		    }
		  }//end
		}
    }

    public function logout() 
	{
		// set the expiration date to one hour ago
		if (isset($_SESSION['user'])) 
		{
		unset($_SESSION['user']);
		unset($_SESSION['pass']);  
		session_destroy();
		}
		setcookie("setcookie","", time() - 86400 * 30, "/");
		$this->load->view('login');
	}



}
