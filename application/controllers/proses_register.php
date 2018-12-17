<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class proses_register extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->helper('url');
    $this->load->helper(array('Form', 'Cookie', 'String'));
    $this->load->library('session');
   
  }


  public function index()
  { }

  public function register()
  {
    $nama=$this->input->post('nama');
    $email=$this->input->post('email');

    $username=$this->input->post('username');
    $pwd=$this->input->post('pwd');
    $pwd_confirm=$this->input->post('pwd_confirm');
    $md5=md5($pwd);
    $password=crypt($md5,"salt");

    $cek_user=$this->db->query("SELECT * FROM user WHERE username='$username' ")->num_rows();//cek user

    $ses=array(
      "nama"=>$_SESSION["nama"]=$nama,
      "email"=>$_SESSION["email"]=$email,
      "username"=>$_SESSION["username"]=$username,
      "pwd"=>$_SESSION["pwd"]=$pwd,
      "pwd_confirm"=>$_SESSION["pwd_confirm"]=$pwd_confirm,
      "password"=>$_SESSION["password"]=$password
    );

    $checkmail=substr($email, -4);

    if(empty($nama))
    {
      $this->load->view('page_register');
    }
    elseif(empty($email))
    {
      redirect("view_register/err_register");
    }
    elseif(empty($username))
    {
      redirect("view_register/err_register");
    }
    elseif($cek_user > 0)
    {
      redirect("view_register/err_register");
    }
    elseif(empty($pwd))
    {
      redirect("view_register/err_register");
    }
    elseif(empty($pwd_confirm))
    {
      redirect("view_register/err_register");
    }
    elseif($pwd_confirm!=$pwd)
    {
      redirect("view_register/err_register");
    }
    else
    {
      $data=array(
      "image"=>"user.png",
      "nama"=>$nama,
      "email"=>$email,
      "username"=>$username,
      "password"=>$password,
      "kelas"=>"0"
      );

      $this->load->model('model_register');
      $this->model_register->insreg($data);
      session_destroy();
      //redirect('view_login/page_login');
      echo  '<script language="javascript">
      alert ("sukses menambah data.");
      window.location="sukses";
      </script>';
    }

  }

  public function sukses()
  {
    $this->load->view('page_login');
  }

 




}
?>