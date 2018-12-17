<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_data extends CI_Model 
{
    
    public function __construct() 
    {
        parent::__construct();
    }

    public function insdata($data)
    {
        $query = $this->db->insert('data_inventory', $data);
        return $query;
    }
     public function editdata($data)
    {
        $edit=$this->db->update('data_inventory', $data);
        return $edit;
    }
     public function datadel($id)
    {
        $del=$this->db->query("DELETE FROM data_inventory WHERE id='$id' ");
        return $del;
    }


}