<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->dashboard();
    }

    public function dashboard() {
        $data = $this->session->userdata();
        $this->load->view('dashboard', $data);
    }

    
}
?>