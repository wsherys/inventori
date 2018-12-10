<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dbinventory extends CI_Model 
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

    public function inventorypc($data)
    {
        $ins=$this->db->insert('inventory_pc',$data);
        return $ins;
    }
    public function inventoryprinter($data)
    {
        $ins=$this->db->insert('inventory_printer',$data);
        return $ins;
    }

    public function log_inventorypc($data)
    {
        $ins=$this->db->insert('log_hapus',$data);
        return $ins;
    }
    public function inventorydel($kode)
    {
        $del=$this->db->query("DELETE FROM inventory_pc WHERE kode_pc='".$kode."' ");
        return $del;
    }
    public function printerdel($id)
    {
        $del=$this->db->query("DELETE FROM inventory_printer WHERE id='".$id."' ");
        return $del;
    }
    
   

    


}