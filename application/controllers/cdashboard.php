<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class cdashboard extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->database();
    $this->load->helper('url');
    $this->load->helper(array('Form', 'Cookie', 'String'));
    $this->load->library('session');
}


public function dashboard()
{
    $user=$this->session->userdata("username");

    if(empty($user))
    {
        $this->load->view('page_login');
    }
    else
    {
        $user=$this->session->userdata("username");

        $dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
        $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
        $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
        $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
        foreach ($dbuser as $value1){}
        
        $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
                    "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);
                   
        $this->load->view('sidebar',$data);
        $this->load->view('dashboard');

    }
    
}

}
?>