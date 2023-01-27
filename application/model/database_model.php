<?php
class database_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
   
    function all_produk()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $query = $this->db->get();
        return $query;
    }
}
