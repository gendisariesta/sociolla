<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // if (!$this->session->userdata('email')) {
        //     redirect('Auth');
        //     $this->load->model('mobil_model');
        //     $this->load->helper(['url_helper', 'form']);
        //     $this->load->library(['form_validation', 'session']);
        //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // }
    }
    public function home()
    {
      $this->load->view('templates/header');
      $this->load->view('templates/navbar');
      $this->load->view('page/home');
      $this->load->view('templates/footer');
    }
    public function produk(){
        $data['produk'] = $this->db->get_where('produk')->row_array();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('page/produk',$data);
        $this->load->view('templates/footer');
    }
    public function voucher(){
        $data['list_data'] = $this->db->get('voucher');
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('page/voucher', $data);
        $this->load->view('templates/footer');
    }
    public function about_us(){
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('page/about-us');
        $this->load->view('templates/footer');
    }
}
