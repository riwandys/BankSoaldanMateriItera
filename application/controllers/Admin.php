<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('prodi_model');
        $this->load->model('matakuliah_model');
    }

    public function index() {
        $this->dashboard();
    }

    public function dashboard() {
        $data['user'] = $this->session->userdata();
        $data['title'] = 'Admin Dashboard - BSMI';
        $data['list_prodi_sains'] = $this->prodi_model->get_prodi_by_jurusan('sains');
        $data['list_prodi_jtik'] = $this->prodi_model->get_prodi_by_jurusan('jtik');
        $data['list_prodi_jtpi'] = $this->prodi_model->get_prodi_by_jurusan('jtpi');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('dashboard');
        $this->load->view('templates/footer');
    }

    public function prodi($kode_prodi) {
        $data['user'] = $this->session->userdata();
        $data['prodi'] = $this->prodi_model->get_prodi($kode_prodi);
        $data['title'] = $data['prodi']['nama_prodi'].' - BSMI';
        $data['list_mata_kuliah'] = $this->matakuliah_model->get_matakuliah_by_prodi($kode_prodi);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('prodi');
        $this->load->view('templates/footer');
    }

    public function matakuliah($kode_matakuliah)
    {
        $data['user'] = $this->session->userdata();
        $data['mata_kuliah'] = $this->matakuliah_model->get_matakuliah($kode_matakuliah);
        $data['title'] = $data['mata_kuliah']['nama_mata_kuliah'].' - BSMI';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('mata_kuliah');
        $this->load->view('templates/footer');
    }

    public function list_materi($kode_mata_kuliah)
    {
        
    }
}
