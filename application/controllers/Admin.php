<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('role') != 'admin') {
            redirect('auth');
        }
        $this->load->model('prodi_model');
        $this->load->model('konten_model');
        $this->load->model('matakuliah_model');
    }

    public function index() {
        $this->dashboard();
    }

    private function load_view_admin($content_file_name, $data)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view($content_file_name);
        $this->load->view('templates/footer');
    }

    public function dashboard() {
        $data['user'] = $this->session->userdata();
        $data['title'] = 'Admin Dashboard - BSMI';
        $data['list_prodi_sains'] = $this->prodi_model->get_prodi_by_jurusan('sains');
        $data['list_prodi_jtik'] = $this->prodi_model->get_prodi_by_jurusan('jtik');
        $data['list_prodi_jtpi'] = $this->prodi_model->get_prodi_by_jurusan('jtpi');
        $this->load_view_admin('dashboard', $data);
    }

    public function prodi($kode_prodi) {
        $data['user'] = $this->session->userdata();
        $data['prodi'] = $this->prodi_model->get_prodi($kode_prodi);
        $data['title'] = $data['prodi']['nama_prodi'] . ' - BSMI';
        $data['list_mata_kuliah'] = $this->matakuliah_model->get_matakuliah_by_prodi($kode_prodi);
        $this->load_view_admin('prodi', $data);
    }

    public function matakuliah($kode_mata_kuliah) {
        $data['user'] = $this->session->userdata();
        $data['mata_kuliah'] = $this->matakuliah_model->get_matakuliah($kode_mata_kuliah);
        $data['title'] = $data['mata_kuliah']['nama_mata_kuliah'] . ' - BSMI';
        $this->load_view_admin('mata_kuliah', $data);
    }
    
    public function list_materi($kode_mata_kuliah) {
        $data['user'] = $this->session->userdata();
        $data['mata_kuliah'] = $this->matakuliah_model->get_matakuliah($kode_mata_kuliah);
        $data['list_materi'] = $this->konten_model->get_materi_by_matakuliah($kode_mata_kuliah);
        $data['title'] = 'Materi '.$data['mata_kuliah']['nama_mata_kuliah'].' - BSMI';
        $this->load_view_admin('materi', $data);
    }
    
    public function add_materi($kode_mata_kuliah) {
        $data['user'] = $this->session->userdata();
        $data['mata_kuliah'] = $this->matakuliah_model->get_matakuliah($kode_mata_kuliah);
        $data['title'] = 'Tambah Materi '.$data['mata_kuliah']['nama_mata_kuliah'].' - BSMI';
        $this->load_view_admin('upload_materi', $data);
    }

    public function list_soal($kode_mata_kuliah) {
        $data['user'] = $this->session->userdata();
        $data['mata_kuliah'] = $this->matakuliah_model->get_matakuliah($kode_mata_kuliah);
        $data['list_soal'] = $this->konten_model->get_soal_by_matakuliah($kode_mata_kuliah);
        $data['title'] = 'Soal '.$data['mata_kuliah']['nama_mata_kuliah'].' - BSMI';
        $this->load_view_admin('soal', $data);
    }
    
    public function list_video($kode_mata_kuliah) {
        $data['user'] = $this->session->userdata();
        $data['mata_kuliah'] = $this->matakuliah_model->get_matakuliah($kode_mata_kuliah);
        $data['list_video'] = $this->konten_model->get_video_by_matakuliah($kode_mata_kuliah);
        $data['title'] = 'Video '.$data['mata_kuliah']['nama_mata_kuliah'].' - BSMI';
        $this->load_view_admin('video', $data);
    }
}
