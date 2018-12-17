<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class proses_data extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');

		$user=$this->session->userdata("username");
        if($user=="")
        {
            redirect('view_login/page_login');
        }
	}

	public function insert_data()
	{
		// $username=$this->input->post('username');
		// $query=$this->db->query("SELECT * FROM user WHERE username='$username' ")->result();
		// foreach ($query as $value){}
		// $nama=$value->nama;
		// $image=$value->image;

		$category=$this->input->post('category');
		$spesification=$this->input->post('spesification');
		$condition=$this->input->post('condition');
		$serial_number=$this->input->post('serial_number');
		$product_number=$this->input->post('product_number');
		$price=$this->input->post('price');
		

		$data=array(
		'kategori'=>$category,
		'spesifikasi'=>$spesification,
		'kondisi'=>$condition,
		'serial_number'=>$serial_number,
		'product_number'=>$product_number,
		'price'=>$price
		);

		if($category=="")
		{
			//redirect('view_data/failed_data');
		}
		elseif($spesification=="")
		{
			redirect('view_data/failed_data');
		}
		elseif($condition=="")
		{
			redirect('view_data/failed_data');
		}
		
		elseif($price=="")
		{
			redirect('view_data/failed_data');
		}
		
		else
		{
			 $this->load->model('model_data');
			 $this->model_data->insdata($data);	
		}
		redirect('view_data/success_data');
		//redirect('view_data/form_data');//tester tok

	}

	public function page_edit()
    {
    	$id=$this->input->get('id', TRUE);
        $user=$this->session->userdata("username");

        $dbuser=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
        $dbpc=$this->db->query("SELECT * FROM inventory_pc ")->num_rows();
        $dbprinter=$this->db->query("SELECT * FROM inventory_printer ")->num_rows();
        $dbscanner=$this->db->query("SELECT * FROM inventory_scanner ")->num_rows();
        foreach ($dbuser as $value1){}
        $s="";
        $data=array("nama"=>$value1->nama,"username"=>$value1->username,"image"=>$value1->image,"kelas"=>$value1->kelas, 
                    "jmlpc"=>$dbpc, "jmlprinter"=>$dbprinter, "jmlscanner"=>$dbscanner,"sukses"=>$s);
		
		$fquery=$this->db->query("SELECT * FROM data_inventory WHERE id='$id' ")->result();
		$Q=array("fquery"=>$fquery);

        $this->load->view('sidebar',$data);
        $this->load->view('form_edit_data',$Q);
    }
    public function editdata()
    {
    	$id=$this->input->post('id');

    	$category=$this->input->post('category');
		$spesification=$this->input->post('spesification');
		$condition=$this->input->post('condition');
		$serial_number=$this->input->post('serial_number');
		$product_number=$this->input->post('product_number');
		$price=$this->input->post('price');

		$data=array(
		'kategori'=>$category,
		'spesifikasi'=>$spesification,
		'kondisi'=>$condition,
		'serial_number'=>$serial_number,
		'product_number'=>$product_number,
		'price'=>$price
		);

		$this->load->model('model_data');
		$this->db->where('id', $id);
		$this->model_data->editdata($data);
		redirect('view_data/success_eddata');
    }

	public function page_delete()
    {
        $username=$this->session->userdata("username");

        // $kode_pc=$this->input->get('kode_pc', TRUE);
        // echo $kode_pc;

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
		$this->load->view('del_data',$sukses);
    }

    public function confirm_delete()
	{
		//$username=$this->input->post('username');
		//cek true by username
		// $query=$this->db->query("SELECT * FROM user WHERE username='$username' ")->result();
		// foreach ($query as $value){}
		// $nama=$value->nama;
		// $image=$value->image;

		$id=$this->input->post('id');

		$this->load->model('model_data');
		$this->model_data->datadel($id);

		redirect('view_data/success_data_del');
	}

	public function select_del()
    {

        if(isset($_POST['data']))
        {
            $dataArr = $_POST['data'] ; 

            foreach($dataArr as $id)
            {
                //mysqli_query($connection , "DELETE FROM user where id='$id'");
                $this->db->query("DELETE FROM data_inventory WHERE id='$id' ");
            }

            echo 'record deleted sukses';
        }
    }




}
