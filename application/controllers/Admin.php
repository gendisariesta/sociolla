<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function produk()
	{
		$data['title'] = 'Produk';
        // $data['admin'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // $data['produk'] = $this->db->get('produk')->result_array();

		$this->load->view('admin/produk', $data);
	}
}