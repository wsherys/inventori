<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dbcategory extends CI_Model 
{
    
    public function __construct() 
    {
        parent::__construct();
    }

    // public function cek_user($data)
    // {
    //     //$this->db->query("SELECT * FROM user WHERE username='$user' && password='$pass'  ")->num_rows();
    //     $query = $this->db->get_where('user', $data);
    //     return $query;
    // }

    // public function cek_cookie($data)
    // {
    //     $query = $this->db->get_where('user', $data);
    //     return $query;
    // }

    public function addcategory($data)
    {
        $ins=$this->db->insert('kategori',$data);
        return $ins;
    }

    public function editcategory($data)
    {
        $edit=$this->db->update('kategori', $data);
        return $edit;
    }
    public function delcategory($id)
    {
        //print_r($data);
        $del=$this->db->query("DELETE FROM kategori WHERE id='".$id."' ");
        return $del;
    }
    
   

    


}