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

        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['title'] = 'Info Lomba';
        // $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $this->load->view('lomba/index');
        // if ($user['role_id'] == 1) {
        //     $this->load->view('templates/header_admin', $data);
        //     $this->load->view('templates/footer_admin');
        // } else {
        //     $this->load->view('templates/header_user', $data);
        //     $this->load->view('templates/footer_user');
        // }
    }
    public function akun()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Akun';
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('page/akun', $data);
        if ($user['role_id'] == 1) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/footer_user');
        }
    }
    public function edit_akun()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Edit Akun';
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('page/edit_akun', $data);
        if ($user['role_id'] == 1) {
            $this->load->view('templates/header_admin', $data);
            $this->load->view('templates/footer_admin');
        } else {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/footer_user');
        }
    }

    function update_akun()
    {
        $data = [
            'nama' => $this->input->post('enama'),
            'alamat' => $this->input->post('ealamat'),
            'jenis_kelamin' => $this->input->post('ekelamin'),
            // 'email' => $this->input->post('eemail'),
            // 'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => $this->input->post('role_id'),
        ];

        $this->db->update('user', $data, array("id" => $this->input->post('id')));
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
        Akun anda berhasil diperbaharui! </div>');

        redirect('Page/akun');
    }
    
    // function update()
    // {
    //     $data = [
    //         'nama' => $this->input->post('dnama'),
    //         'alamat' => $this->input->post('dalamat'),
    //         'jenis_kelamin' => $this->input->post('dkelamin'),
    //         // 'email' => $this->input->post('eemail'),
    //         // 'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
    //         'role_id' => $this->input->post('role_id'),
    //     ];

    //     $this->db->update('user', $data, array("id" => $this->input->post('id')));
    //     $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
    //     Akun anda berhasil diperbaharui! </div>');

    //     redirect('Page/akun');
    // }


    public function produk(){
        $data['produk'] = $this->db->get_where('produk')->row_array();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('page/produk',$data);
        $this->load->view('templates/footer');
    }
    public function voucher(){
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('page/voucher');
        $this->load->view('templates/footer');
    }
    public function about_us(){
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('page/about-us');
        $this->load->view('templates/footer');
    }
}
