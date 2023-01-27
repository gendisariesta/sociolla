<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', ['required' => 'Email harus diisi', 'valid_email' => 'Penulisan email tidak tepat']);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => 'Password harus diisi']);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('auth/login');
            $this->load->view('templates/footer');
        } else {
            $this->login();
        }
    }

    private function login()
    {
        $this->load->library('form_validation');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => htmlspecialchars($user['email'], true),
                        'role_id' => htmlspecialchars($user['role_id'], true)
                    ];
                    $this->session->set_userdata($data);
                   redirect('Account/profil');
                } else {
                    $this->session->set_flashdata('pesan1', '<div class="alert alert-danger" role="alert">
            Password salah.
          </div>');
                    redirect('Auth');
                }
            } else {
                $this->session->set_flashdata('pesan1', '<div class="alert alert-danger" role="alert">
            Email belum ada.
          </div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('pesan1', '<div class="alert alert-danger" role="alert">
            Email belum terdaftar.
          </div>');
            redirect('Auth');
        }
    }
    function registration()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', ['required' => 'Nama harus diisi']);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['required' => 'Email harus diisi', 'valid_email' => 'Penulisan email tidak tepat', 'is_unique' => 'Email sudah terdaftar']);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', ['required' => 'Password harus diisi', 'min_length' => 'Minimal 5 karakter', 'matches' => 'Password tidak sama']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', ['required' => 'Password harus diisi', 'matches' => 'Password tidak sama']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', ['required' => 'Alamat harus diisi']);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_Kelamin', 'required', ['required' => 'Jenis Kelamin harus dipilih']);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Daftar';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('auth/registration');
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
            Akun anda berhasil dibuat, Silahkan Masuk!
          </div>');
            redirect('Auth');
        }
    }
    public function logout()
    {
        $this->load->library('form_validation');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
        Akun anda berhasil keluar!
      </div>');
        redirect('Auth');
    }
    public function block()
    {
        echo "BLOCKED";
    }
}
