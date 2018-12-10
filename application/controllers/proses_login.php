<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class proses_login extends CI_Controller {

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
  { }

  public function login()
  {
    $user = $this->input->post('username');
    $pwd=$this->input->post('pwd');
    $md5=md5($pwd);
    $pass=crypt($md5,"salt");
    $remember=$this->input->post("remember");

    $cek_user=$this->db->query("SELECT * FROM user WHERE username='$user' && password='$pass' ")->num_rows();//cek user
    //$normb=array('username'=>$user);

    if($cek_user==1)
    {
      //echo 'ada';
      if($remember=="on")
      {
        session_start();
        $_SESSION["username"] = $user;
        redirect('cremember/remember');
      }
      else
      {
        //echo 'no remember';
        session_start();
        $_SESSION["username"] = $user;
        redirect('cnoremember/noremember');
      }
    }
    else
    {
      redirect('cindex/index');//cek login
    }

  }

  public function forgot()
  {
    $this->load->view('forgot');
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
    $this->load->view('page_login');
  }




}
?>