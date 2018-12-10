<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class crud_category extends CI_Controller 
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
            redirect('clogin/index');
        }
	}

	public function page_confirm()
	{
		$username=$this->session->userdata("username");
		
		$query=$this->db->query("SELECT * FROM user WHERE username='$username' ")->result();
		foreach ($query as $value){}
		$nama=$value->nama;
		$image=$value->image;

		$nama_kategori=$this->input->post('nama_kategori');
		$spesifikasi=$this->input->post('spesifikasi');
		$kondisi=$this->input->post('kondisi');
		$sn=$this->input->post('sn');
		$pn=$this->input->post('pn');

		$data=array(
		'username'=>$username,	
		'nama'=>$nama,
		'image'=>$image,	

		'kategori'=>$nama_kategori,
		'spesifikasi'=>$spesifikasi,
		'kondisi'=>$kondisi,
		'sn'=>$sn,
		'pn'=>$pn
		);

		if($nama_kategori=="")
		{
			redirect('category/fail_page_add');
		}
		elseif($spesifikasi=="")
		{
			redirect('category/fail_page_add');
		}
		elseif($kondisi=="")
		{
			redirect('category/fail_page_add');
		}
		elseif($sn=="")
		{
			redirect('category/fail_page_add');
		}
		elseif($pn=="")
		{
			redirect('category/fail_page_add');
		}
		
		else
		{
			//$this->load->view('confirm_sidebar',$data);
			//$this->load->view('confirm_form_addcategory',$data);
		}

	}

	public function confirm()
	{
		$username=$this->input->post('username');
		$query=$this->db->query("SELECT * FROM user WHERE username='$username' ")->result();
		foreach ($query as $value){}
		$nama=$value->nama;
		$image=$value->image;

		$nama_kategori=$this->input->post('nama_kategori');
		$spesifikasi=$this->input->post('spesifikasi');
		$kondisi=$this->input->post('kondisi');
		$sn=$this->input->post('sn');
		$pn=$this->input->post('pn');

		$data=array(

		'kategori'=>strtoupper($nama_kategori),
		'spesifikasi'=>$spesifikasi,
		'kondisi'=>strtoupper($kondisi),
		'serial_number'=>$sn,
		'product_number'=>$pn
		);

		$this->load->model('dbcategory');
		$this->dbcategory->addcategory($data);

		redirect('category/page_category');
	}

	public function confirm_edit()
    {
    	$id=$this->input->post('id');
        $username=$this->session->userdata("username");

       	$nama_kategori=$this->input->post('nama_kategori');
		$spesifikasi=$this->input->post('spesifikasi');
		$kondisi=$this->input->post('kondisi');
		$sn=$this->input->post('sn');
		$pn=$this->input->post('pn');

		$data=array(
		'kategori'=>strtoupper($nama_kategori),
		'spesifikasi'=>$spesifikasi,
		'kondisi'=>strtoupper($kondisi),
		'serial_number'=>$sn,
		'product_number'=>$pn
		);

		$this->load->model('dbcategory');
		$this->db->where('id', $id);
		$this->dbcategory->editcategory($data);

		redirect('category/page_category');

		
    }

	
    public function confirm_delete()
	{
		$username=$this->input->post('username');
		//cek true by username
		$query=$this->db->query("SELECT * FROM user WHERE username='$username' ")->result();
		foreach ($query as $value){}
		$nama=$value->nama;
		$image=$value->image;

		$id=$this->input->post('id');
		$data=array('username'=>$username,'id'=>$id);


		$this->load->model('dbcategory');
		$this->dbcategory->delcategory($id);

		redirect('category/success_delcategory');
	}

	public function select_del()
    {

        if(isset($_POST['data']))
        {
            $dataArr = $_POST['data'] ; 

            foreach($dataArr as $id)
            {
                //mysqli_query($connection , "DELETE FROM user where id='$id'");
                $this->db->query("DELETE FROM kategori WHERE id='$id' ");
            }

            echo 'record deleted sukses';
        }
    }

}
