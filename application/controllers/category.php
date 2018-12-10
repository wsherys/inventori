<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class category extends CI_Controller 
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
            redirect('clogin/index');
        }
	}

    
	public function page_category()
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
        $this->load->view('kategori_data',$sukses);
    }

    public function page_add()
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
        $this->load->view('form_addcategory',$sukses);
    }


    public function fail_page_add()
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
        $this->load->view('form_addcategory',$sukses);
    }

    public function page_edit()
    {
        $username=$this->session->userdata("username");

        $query=$this->db->query("SELECT * FROM user WHERE username='$username' ")->result();
        foreach ($query as $value){}
        $nama=$value->nama;
        $image=$value->image;

        $id=$this->input->get('id', TRUE);

        $dbuser=$this->db->query("SELECT * FROM user WHERE username='$username' ")->result();
        $category=$this->db->query("SELECT * FROM kategori WHERE id='$id' ")->result();

        $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
        $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
        $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
        foreach ($dbuser as $value1){}
        foreach ($category as $value2){}

        
        $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
                    "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner,

                    "id"=>$id, "nama_kategori"=>$value2->kategori, "spesifikasi"=>$value2->spesifikasi, "sn"=>$value2->serial_number, "pn"=>$value2->product_number, "kondisi"=>$value2->kondisi);

        $s="";
        $sukses=array("sukses"=>$s);
        $this->load->view('sidebar',$data);
        $this->load->view('form_editcategory',$sukses);
    }

    public function page_delete()
    {
        $username=$this->session->userdata("username");

        $query=$this->db->query("SELECT * FROM user WHERE username='$username' ")->result();
        foreach ($query as $value){}
        $nama=$value->nama;
        $image=$value->image;

        $id=$this->input->get('id', TRUE);

        $data=array(
        'username'=>$username,  
        'nama'=>$nama,
        'image'=>$image,    
        'id'=>$id
        );
        
        
        $s="";
        $sukses=array("sukses"=>$s);
        $this->load->view('del_sidebar',$data);
        $this->load->view('del_category',$sukses);
    }

    public function success_delcategory()
    {
        $username=$this->session->userdata("username");

       

        $id=$this->input->get('id', TRUE);

        $dbuser=$this->db->query("SELECT * FROM user WHERE username='$username' ")->result();
        $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
        $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
        $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
        foreach ($dbuser as $value1){}

        
        $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
                    "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner);
        
        
        $s="suksesdel";
        $sukses=array("sukses"=>$s);
        $this->load->view('sidebar',$data);
        $this->load->view('kategori_data',$sukses);
    }

	

	


}
