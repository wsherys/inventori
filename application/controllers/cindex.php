<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cindex extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
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
	                foreach ($dbuser as $value1){}
	                $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
	                $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
	                $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();

	                foreach ($dbuser as $value){}
	                $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
	                            "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);
	                $this->load->view('sidebar',$data);
	                $this->load->view('dashboard');
				}
				elseif($this->session->userdata('kelas')=='SUPERADMIN') 
				{
				  	$user=$this->session->userdata('username');
					$dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
	                foreach ($dbuser as $value1){}
	                $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
	                $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
	                $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();

	                foreach ($dbuser as $value){}
	                $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
	                            "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);
	                
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
		session_start();
		session_destroy();
		$this->load->view("page_login");
	}


	public function register()
	{
		session_start();
		session_destroy();
		$this->reg();
	}
	private function reg()
	{
		$this->load->view("register");
	}


}
