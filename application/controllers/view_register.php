<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class view_register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
    $this->load->helper(array('Form', 'Cookie', 'String'));
    $this->load->library('session');
	}

  public function register()
  {
    $this->load->view('page_register');
  }

  public function err_register()
  {
    $nama= $_SESSION["nama"];
    $email= $_SESSION["email"];
    $username= $_SESSION["username"];
    $pwd= $_SESSION["pwd"];
    $pwd_confirm= $_SESSION["pwd_confirm"];
    $password= $_SESSION["password"];    

    $cek_user=$this->db->query("SELECT * FROM user WHERE username='$username' ")->num_rows();//cek user

    $data=array(
    "nama"=>$nama,
    "email"=>$email,
    "username"=>$username,
    "pwd"=>$pwd,
    "pwd_confirm"=>$pwd_confirm,
    "password"=>$password,
    "cek_user"=>$cek_user,
    );
    $this->load->view('page_register',$data);

  }

  




}
?>