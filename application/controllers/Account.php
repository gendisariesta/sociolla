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
    public function edit_akun()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Edit Akun';
        $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('page/edit_akun', $data);
        $this->load->view('templates/footer');
    }
    function update_akun()
    {
        $data = [
            'nama' => $this->input->post('enama'),
            'alamat' => $this->input->post('ealamat'),
            'jenis_kelamin' => $this->input->post('ekelamin'),
            // 'email' => $this->input->post('eemail'),
            // 'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            // 'role_id' => $this->input->post('role_id'),
        ];
        $this->db->update('user', $data, array("id" => $this->input->post('id')));
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
        Akun anda berhasil diperbaharui! </div>');
        redirect('Account/profil');
    }
    function bag()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('page/mybag');
        $this->load->view('templates/footer');
    }
}
