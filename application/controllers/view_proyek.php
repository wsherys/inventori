<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class view_proyek extends CI_Controller 
{

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
            redirect('view_login/page_login');
        }
	}

    
	public function proyek()
	{
		$user=$this->session->userdata("username");

        $dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
        $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
        $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
        $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
        foreach ($dbuser as $value1){}

        
        $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
                    "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);

    	$s="";
    	$sukses=array("sukses"=>$s);

        $this->load->view('sidebar',$data);
        $this->load->view('proyek',$sukses);
	}
 //    public function form_data()
 //    {
 //        $user=$this->session->userdata("username");

 //        $dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
 //        $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
 //        $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
 //        $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
 //        foreach ($dbuser as $value1){}

        
 //        $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
 //                    "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);

 //        $s="";
 //        $sukses=array("sukses"=>$s);

 //        $this->load->view('sidebar',$data);
 //        $this->load->view('form_add_data',$sukses);

 //    }
 //    public function failed_data()
 //    {
 //     $user=$this->session->userdata("username");

 //        $dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
 //        $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
 //        $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
 //        $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
 //        foreach ($dbuser as $value1){}
        
 //        $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
 //                    "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);

 //        $s="notvalid";
 //        $sukses=array("sukses"=>$s);

 //        $this->load->view('sidebar',$data);
 //        $this->load->view('form_add_data',$sukses);
 //    }

	// public function success_data()//redirect sukses add
	// {
	// 	$user=$this->session->userdata("username");

 //        $dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
 //        $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
 //        $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
 //        $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
 //        foreach ($dbuser as $value1){}
        
 //        $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
 //                    "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);

 //    	$s="sukses";
 //    	$sukses=array("sukses"=>$s);

 //        $this->load->view('sidebar',$data);
 //        $this->load->view('data_inventory',$sukses);
	// }
 //    public function success_eddata()//redirect sukses add
 //    {
 //        $user=$this->session->userdata("username");

 //        $dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
 //        $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
 //        $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
 //        $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
 //        foreach ($dbuser as $value1){}
        
 //        $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
 //                    "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);

 //        $s="suksesedit";
 //        $sukses=array("sukses"=>$s);

 //        $this->load->view('sidebar',$data);
 //        $this->load->view('data_inventory',$sukses);
 //    }
	

 //    //delete inventory pc
 //    public function success_data_del()
 //    {
 //        $user=$this->session->userdata("username");

 //        $dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
 //        $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
 //        $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
 //        $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
 //        foreach ($dbuser as $value1){}
        
 //        $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
 //                    "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);

 //        $s="suksesdel";
 //        $sukses=array("sukses"=>$s);

 //        $this->load->view('sidebar',$data);
 //        $this->load->view('data_inventory',$sukses);
 //    }

 

	

	


}
