<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guru extends CI_Controller {
  public function __construct (){
    parent:: __construct();
    // if($this->session->userdata('login') !== "1")
    //         redirect (site_url ());
    $this->load->model ('m_guru');
    $this->load->helper('file');
    $this->load->library('pagination');
  }
    
	public function index (){        
    $this->load->view('guru/index');
  }

  public function mata_pelajaran(){
    $data['matpel'] = $this->m_guru->get_matpel()->result_array();
    $data['tingkat_kelas'] = $this->m_guru->get_tingkat_kelas()->result_array();
    $data['jurusan'] = $this->m_guru->get_jurusan()->result_array();
    $this->load->view('guru/list_matpel', $data);
  }

  public function proses_tambah_matpel(){
    $dataMatpel['nama_mata_pelajaran'] = $this->input->post('matpel');

    $data['id_mata_pelajaran'] = $this->m_guru->tambah_matpel($dataMatpel);
    $id_tk = $this->input->post('id_tingkat_kelas');
    $id_jur = $this->input->post('id_jurusan');
    $id_tj_jur = $this->m_guru->get_id_tk_jur($id_tk, $id_jur)->row();
    
    if(count($id_tj_jur) > 0){
      $data['id_tk_jurusan'] = $id_tj_jur->id_tk_jurusan;     
    }else{
      $dataJur['id_tingkat_kelas'] = $this->input->post('id_tingkat_kelas');
      $dataJur['id_jurusan'] = $this->input->post('id_jurusan');
      $data['id_tk_jurusan'] = $this->m_guru->tambah_tk_jur($dataJur);
    }
    $this->m_guru->tambah_matpel_tk($data);
    redirect(site_url('guru/mata_pelajaran'));
  }

  public function hapus_matpel($id){
    $id_matpel = $this->m_guru->get_id_matpel($id)->row();
    $id_mata_pelajaran = $id_matpel->id_mata_pelajaran;

    $this->m_guru->hapus_matpel($id_mata_pelajaran);
    $this->m_guru->hapus_matpel_tk($id);
    redirect(site_url('guru/mata_pelajaran'));
  }

  public function detail_matpel($id){
    $data['id_matpel'] = $id;
    $data['sup'] = $this->m_guru->get_support($id)->result_array();
    $data['conf'] = $this->m_guru->get_confidence($id)->result_array();
    $cek = $this->input->post('cek');
    
    if($cek == 1){
      $conf = $this->input->post('confidence');
      $sup = $this->input->post('support');
    }else{
      $conf = 0;
      $sup = 0;
    }    
    $id_rules = $this->m_guru->get_id_rules_by_sup_conf($id, $sup, $conf)->result_array();

    $data['rules'] = $this->m_guru->get_rules($id, $sup, $conf)->result_array();      
    $id_tk_jurusan = $this->m_guru->get_id_tk_jurusan($id)->row();
    $id_rule_aktif = $this->m_guru->get_rule_aktif_by_id_tk_jurusan($id_tk_jurusan->id_tk_jurusan)->row();
    
    $data['status'] = 0;
    if(count($id_rules) > 0){
      if($id_rules[0]['id_rules'] == $id_rule_aktif->id_rules){
        $data['status'] = 1;
      }
    }

    $data['minConf'] = $conf;
    $data['minSup'] = $sup;
    $data['id_rules'] = $this->m_guru->get_id_rules($id)->result_array();
    $data['id_siswa'] = $this->m_guru->get_siswa_matpel($id)->result_array();
    $this->load->view('guru/detail_matpel', $data);    
  }

}
