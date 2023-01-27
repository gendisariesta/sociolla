<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
          if (!$this->session->userdata('email')) {
            redirect('Auth');
        }
    }
    public function profil()
    {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = 'Profil';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('page/profil', $data);
            $this->load->view('templates/footer');
      
    }
    function bag(){
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('page/mybag');
        $this->load->view('templates/footer');
    }
}
