<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login - BSMI';
            $this->load->view('auth/login', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $prodi = $this->db->get_where('program_studi', ['kode_prodi' => $user['kode_prodi']])->row_array();
                $data = [
                    'username' => $user['username'],
                    'role' => $user['role'],
                    'kode_prodi' => $user['kode_prodi'],
                    'nama_prodi' => $prodi['nama_prodi']
                ];
                $this->session->set_userdata($data);
                if ($user['role'] == 'admin') {
                    redirect('admin');
                } elseif ($user['role'] == 'operator') {
                    redirect('operator');
                }
            } else {
                $this->session->set_flashdata('message',
                '<div class="alert alert-danger" role="alert">
                    Wrong password!
                </div>');
                redirect('auth');
            }
        } else {
            
        }
    }
}