<?php
class Konten_model extends CI_Model {
    
    public function get_materi($kode_materi) {
        return $this->db->get_where('file_materi', ['kode_materi' => $kode_materi])->row_array();
    }

    public function get_materi_by_matakuliah($kode_mata_kuliah) {
        $this->db->order_by('judul_materi','ASC');
		return $this->db->get_where('file_materi', ['kode_mata_kuliah'=>$kode_mata_kuliah])->result_array();
    }

    public function get_soal($kode_soal) {
        return $this->db->get_where('file_soal', ['kode_soal' => $kode_soal])->row_array();
    }

    public function get_soal_by_matakuliah($kode_mata_kuliah) {
        $this->db->order_by('judul_soal','ASC');
        return $this->db->get_where('file_soal', ['kode_mata_kuliah'=>$kode_mata_kuliah])->result_array();
    }
}
?>