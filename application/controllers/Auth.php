<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_model');
        $this->load->model('prodi_model');
    }

    public function index() {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login - BSMI';
            $this->load->view('auth/login', $data);
        } else {
            $this->_login();
        }
    }

    private function _login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->user_model->get_user($username);
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $prodi = $this->prodi_model->get_prodi($user['kode_prodi']);
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
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert">
                    Wrong password!
                </div>'
                );
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">
                Username not found
            </div>'
            );
            redirect('auth');
        }
    }

    public function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('kode_prodi');
        $this->session->unset_userdata('nama_prodi');
        redirect('auth');
    }
}
