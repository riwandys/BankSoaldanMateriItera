<?php
class Matakuliah_model extends CI_Model {
    
    public function get_matakuliah($kode_mata_kuliah) {
        return $this->db->get_where('mata_kuliah', ['kode_mata_kuliah' => $kode_mata_kuliah])->row_array();
    }

    public function get_matakuliah_by_prodi($kode_prodi) {
        $this->db->order_by('nama_mata_kuliah','ASC');
		return $this->db->get_where('mata_kuliah', array('kode_prodi'=>$kode_prodi))->result_array();
    }
}
?>