<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class crudinventory extends CI_Controller 
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

	public function insert_pc()
	{
		$username=$this->input->post('username');
		$query=$this->db->query("SELECT * FROM user WHERE username='$username' ")->result();
		foreach ($query as $value){}
		$nama=$value->nama;
		$image=$value->image;

		$kode=$this->input->post('kode');
		$proyek=$this->input->post('proyek');
		$pengguna=$this->input->post('pengguna');
		$processor=$this->input->post('processor');
		$psu=$this->input->post('psu');
		$ram=$this->input->post('ram'); 
		$vga=$this->input->post('vga');
		$hardisk =$this->input->post('hardisk');
		$motherboard=$this->input->post('motherboard');
		$lcd =$this->input->post('lcd');
		$keyboard =$this->input->post('keyboard');
		$mouse =$this->input->post('mouse');
		$tgl =$this->input->post('tgl');

		$data=array(
		'kode_pc'=>$kode,
		'proyek'=>$proyek,
		'pengguna'=>$pengguna,
		'processor'=>$processor,
		'psu'=>$psu,
		'ram'=>$ram,
		'vga'=>$vga,
		'hardisk'=>$hardisk,
		'motherboard'=>$motherboard,
		'lcd'=>$lcd,
		'keyboard'=>$keyboard,
		'mouse'=>$mouse,
		'tgl_digunakan'=>$tgl
		);

		if($kode=="")
		{
			redirect('cinv/failed_inventory_pc');
		}
		elseif($proyek=="")
		{
			redirect('cinv/failed_inventory_pc');
		}
		elseif($pengguna=="")
		{
			redirect('cinv/failed_inventory_pc');
		}
		elseif($processor=="")
		{
			redirect('cinv/failed_inventory_pc');
		}
		elseif($psu=="")
		{
			redirect('cinv/failed_inventory_pc');
		}
		elseif($ram=="")
		{
			redirect('cinv/failed_inventory_pc');
		}
		elseif($vga=="")
		{
			redirect('cinv/failed_inventory_pc');
		}
		elseif($hardisk=="")
		{
			redirect('cinv/failed_inventory_pc');
		}
		elseif($motherboard=="")
		{
			redirect('cinv/failed_inventory_pc');
		}
		elseif($lcd=="")
		{
			redirect('cinv/failed_inventory_pc');
		}
		elseif($keyboard=="")
		{
			redirect('cinv/failed_inventory_pc');
		}
		elseif($mouse=="")
		{
			redirect('cinv/failed_inventory_pc');
		}
		elseif($tgl=="")
		{
			redirect('cinv/failed_inventory_pc');
		}
		else
		{
			$this->load->model('dbinventory');
			$this->dbinventory->inventorypc($data);	
		}
		redirect('cinv/success_inventory_pc');
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
		
		$fquery=$this->db->query("SELECT * FROM inventory_pc WHERE id='$id' ")->result();
		$Q=array("fquery"=>$fquery);

        $this->load->view('sidebar',$data);
        $this->load->view('form_edit_pc',$Q);
    }

    public function editpc()
    {
    	$kode=$this->input->post('kode');
		$proyek=$this->input->post('proyek');
		$pengguna=$this->input->post('pengguna');
		$processor=$this->input->post('processor');
		$psu=$this->input->post('psu');
		$ram=$this->input->post('ram'); 
		$vga=$this->input->post('vga');
		$hardisk =$this->input->post('hardisk');
		$motherboard=$this->input->post('motherboard');
		$lcd =$this->input->post('lcd');
		$keyboard =$this->input->post('keyboard');
		$mouse =$this->input->post('mouse');
		$tgl =$this->input->post('tgl');
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

		$kode=$this->input->get('kode_pc', TRUE);

		$data=array(
		'username'=>$username,	
		'nama'=>$nama,
		'image'=>$image,	

		'kode'=>$kode
		);
		
		
		$s="";
    	$sukses=array("sukses"=>$s);
		$this->load->view('del_sidebar',$data);
		$this->load->view('del_inventory_pc',$sukses);
    }

    public function confirm_delete()
	{
		$username=$this->input->post('username');
		//cek true by username
		$query=$this->db->query("SELECT * FROM user WHERE username='$username' ")->result();
		foreach ($query as $value){}
		$nama=$value->nama;
		$image=$value->image;

		$kode=$this->input->post('kode');
		$data=array('username'=>$username,'kode_pc'=>$kode);


		$this->load->model('dbinventory');
		$this->dbinventory->log_inventorypc($data);
		$this->dbinventory->inventorydel($kode);

		redirect('cinv/success_inventorypc_del');
	}

	public function select_del()
    {

        if(isset($_POST['data']))
        {
            $dataArr = $_POST['data'] ; 

            foreach($dataArr as $kode_pc)
            {
                //mysqli_query($connection , "DELETE FROM user where id='$id'");
                $this->db->query("DELETE FROM inventory_pc WHERE kode_pc='$kode_pc' ");
            }

            echo 'record deleted sukses';
        }
    }



    public function insert_printer()
	{
		$username=$this->session->userdata("username");
		
		$query=$this->db->query("SELECT * FROM user WHERE username='$username' ")->result();
		foreach ($query as $value){}
		$nama=$value->nama;
		$image=$value->image;

		$kode=$this->input->post('kode');
		$printer=$this->input->post('printer');
		$posisi=$this->input->post('posisi');
		$tgl =$this->input->post('tgl');

		$data=array(
		'kode_printer'=>$kode,
		'spesifikasi_printer'=>$printer,
		'posisi_printer'=>$posisi,
		'tgl_pembelian'=>$tgl
		);

		
		if($printer=="")
		{
			redirect('cinv/failed_inventoryprinter');
		}
		elseif($posisi=="")
		{
			redirect('cinv/failed_inventoryprinter');
		}
		elseif($tgl=="")
		{
			redirect('cinv/failed_inventoryprinter');
		}
		else
		{
			$this->load->model('dbinventory');
			$this->dbinventory->inventoryprinter($data);

			redirect('cinv/success_inventory_printer');	
		}

	}

	public function page_del_printer()
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
		$this->load->view('del_inventory_printer',$sukses);
    }

    public function del_printer()
	{
		$username=$this->input->post('username');
		//cek true by username
		$query=$this->db->query("SELECT * FROM user WHERE username='$username' ")->result();
		foreach ($query as $value){}
		$nama=$value->nama;
		$image=$value->image;

		$id=$this->input->post('id');
		$data=array('username'=>$username,'id'=>$id);


		$this->load->model('dbinventory');
		//$this->dbinventory->log_inventorypc($data);
		$this->dbinventory->printerdel($id);

		redirect('cinv/success_inventoryprinter_del');
	}

	public function select_delprint()
    {

        if(isset($_POST['data']))
        {
            $dataArr = $_POST['data'] ; 

            foreach($dataArr as $id)
            {
                //mysqli_query($connection , "DELETE FROM user where id='$id'");
                $this->db->query("DELETE FROM inventory_printer WHERE id='$id' ");
            }

            echo 'record deleted sukses';
        }
    }


}
