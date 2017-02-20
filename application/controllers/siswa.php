<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa extends CI_Controller {
  public function __construct (){
    parent:: __construct();
    if($this->session->userdata('login') !== "1")
            redirect (site_url ());
    $this->load->model ('m_siswa');
    $this->load->helper('file');
    $this->load->library('pagination');
  }
    
	public function index (){        
    $this->load->view('siswa/index');
  }
}
