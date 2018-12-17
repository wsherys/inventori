<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class view_inventory extends CI_Controller 
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

    
	public function inventory_pc()
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
        $this->load->view('inventory_pc',$sukses);
	}
    public function form_invpc()
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
        $this->load->view('form_addpc',$sukses);

    }
	public function success_inventory_pc()//redirect sukses add
	{
		$user=$this->session->userdata("username");

        $dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
        $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
        $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
        $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
        foreach ($dbuser as $value1){}
        
        $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
                    "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);

    	$s="sukses";
    	$sukses=array("sukses"=>$s);

        $this->load->view('sidebar',$data);
        $this->load->view('inventory_pc',$sukses);
	}
    public function success_edinventory_pc()//redirect sukses add
    {
        $user=$this->session->userdata("username");

        $dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
        $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
        $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
        $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
        foreach ($dbuser as $value1){}
        
        $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
                    "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);

        $s="suksesedit";
        $sukses=array("sukses"=>$s);

        $this->load->view('sidebar',$data);
        $this->load->view('inventory_pc',$sukses);
    }
	public function failed_inventory_pc()
	{
		$user=$this->session->userdata("username");

        $dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
        $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
        $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
        $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
        foreach ($dbuser as $value1){}
        
        $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
                    "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);

    	$s="notvalid";
    	$sukses=array("sukses"=>$s);

        $this->load->view('sidebar',$data);
        $this->load->view('form_add',$sukses);
	}

    //delete inventory pc
    public function success_inventorypc_del()
    {
        $user=$this->session->userdata("username");

        $dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
        $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
        $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
        $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
        foreach ($dbuser as $value1){}
        
        $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
                    "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);

        $s="suksesdel";
        $sukses=array("sukses"=>$s);

        $this->load->view('sidebar',$data);
        $this->load->view('inventory_pc',$sukses);
    }

    //printer
    public function inventory_printer()
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
        $this->load->view('inventory_printer',$sukses);
    }
    public function form_invprinter()
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
        $this->load->view('form_addprinter',$sukses);
    }
    public function success_edinventory_printer()//redirect sukses add
    {
        $user=$this->session->userdata("username");

        $dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
        $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
        $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
        $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
        foreach ($dbuser as $value1){}
        
        $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
                    "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);

        $s="suksesedit";
        $sukses=array("sukses"=>$s);

        $this->load->view('sidebar',$data);
        $this->load->view('inventory_printer',$sukses);
    }
    public function failed_inventoryprinter()
    {
        $user=$this->session->userdata("username");

        $dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
        $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
        $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
        $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
        foreach ($dbuser as $value1){}
        
        $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
                    "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);

        $s="notvalid";
        $sukses=array("sukses"=>$s);

        $this->load->view('sidebar',$data);
        $this->load->view('form_addprinter',$sukses);
    }
    

    public function success_inventory_printer()//redirect sukses menambah data
    {
        $user=$this->session->userdata("username");

        $dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
        $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
        $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
        $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
        foreach ($dbuser as $value1){}
        
        $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
                    "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);

        $s="sukses";
        $sukses=array("sukses"=>$s);

        $this->load->view('sidebar',$data);
        $this->load->view('inventory_printer',$sukses);
    }
    

     public function success_inventoryprinter_del()
    {
        $user=$this->session->userdata("username");

        $dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
        $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
        $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
        $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
        foreach ($dbuser as $value1){}
        
        $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
                    "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);

        $s="suksesdel";
        $sukses=array("sukses"=>$s);

        $this->load->view('sidebar',$data);
        $this->load->view('inventory_printer',$sukses);
    }


    //scannner
    public function inventory_scanner()
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
        $this->load->view('inventory_scanner',$sukses);
    }
    public function form_invscanner()
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
        $this->load->view('form_addscanner',$sukses);

    }
    public function success_inventory_scanner()//redirect sukses menambah data
    {
        $user=$this->session->userdata("username");

        $dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
        $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
        $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
        $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
        foreach ($dbuser as $value1){}
        
        $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
                    "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);

        $s="sukses";
        $sukses=array("sukses"=>$s);

        $this->load->view('sidebar',$data);
        $this->load->view('inventory_scanner',$sukses);
    }
    public function success_edinventory_scanner()//redirect sukses add
    {
        $user=$this->session->userdata("username");

        $dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
        $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
        $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
        $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
        foreach ($dbuser as $value1){}
        
        $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
                    "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);

        $s="suksesedit";
        $sukses=array("sukses"=>$s);

        $this->load->view('sidebar',$data);
        $this->load->view('inventory_scanner',$sukses);
    }
    public function failed_inventoryscanner()
    {
        $user=$this->session->userdata("username");

        $dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
        $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
        $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
        $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
        foreach ($dbuser as $value1){}
        
        $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
                    "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);

        $s="notvalid";
        $sukses=array("sukses"=>$s);

        $this->load->view('sidebar',$data);
        $this->load->view('form_addscanner',$sukses);
    }

    //delete inventory pc
    public function success_inventoryscanner_del()
    {
        $user=$this->session->userdata("username");

        $dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
        $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
        $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
        $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
        foreach ($dbuser as $value1){}
        
        $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
                    "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);

        $s="suksesdel";
        $sukses=array("sukses"=>$s);

        $this->load->view('sidebar',$data);
        $this->load->view('inventory_scanner',$sukses);
    }

	

	


}
