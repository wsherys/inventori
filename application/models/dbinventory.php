<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dbinventory extends CI_Model 
{
    
    public function __construct() 
    {
        parent::__construct();
    }

    //pc
    public function inventorypc($data)
    {
        $ins=$this->db->insert('inventory_pc',$data);
        return $ins;
    }
    public function editpc($data)
    {
        $edit=$this->db->update('inventory_pc', $data);
        return $edit;
    }
    public function inventorydel($kode)
    {
        $del=$this->db->query("DELETE FROM inventory_pc WHERE kode_pc='".$kode."' ");
        return $del;
    }

    //printer
    public function inventoryprinter($data)
    {
        $ins=$this->db->insert('inventory_printer',$data);
        return $ins;
    }
    public function printerdel($id)
    {
        $del=$this->db->query("DELETE FROM inventory_printer WHERE id='".$id."' ");
        return $del;
    }

    public function log_inventorypc($data)
    {
        $ins=$this->db->insert('log_hapus',$data);
        return $ins;
    }
    
   

    


}