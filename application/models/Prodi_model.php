<?php
class Prodi_model extends CI_Model {
    
    public function get_prodi($kode_prodi) {
        return $this->db->get_where('program_studi', ['kode_prodi' => $kode_prodi])->row_array();
    }

    public function get_prodi_by_jurusan($jurusan)
    {
        $this->db->order_by('nama_prodi','ASC');
		return $this->db->get_where('program_studi', array('jurusan'=>$jurusan))->result_array();
    }
}
?>