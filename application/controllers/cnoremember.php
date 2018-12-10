<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class cnoremember extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper(array('Form', 'Cookie', 'String'));
        $this->load->library('session');

        $user=$this->session->userdata("username");
        if($user=="")
        {
            redirect('clogin/index');
        }
    }

    

    public function noremember()
    {
        $user=$_SESSION["username"];//ambil session
        //$cookie_name = 'setcookie';
        //$cookie_user = $user;

        //setcookie($cookie_name,$cookie_user ,time() + (86400 * 30), "/"); //set cookies
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
                foreach ($dbuser as $value1){}
                $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
                $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
                $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
                
                $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
                            "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);
               

                $this->load->view('sidebar',$data);
                $this->load->view('dashboard');
              }
              elseif($this->session->userdata('kelas')=='SUPERADMIN') 
              {
                  echo 'belum ada page SUPERADMIN';
              }
              else 
              {
                echo  '<script language="javascript">
                alert ("belum ada page.");
                window.location="redi_login";
                </script>';
              }

            }
        }
    }

    public function redi_login()
    {
        redirect('cindex/login');
    }


}
?>