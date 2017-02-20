<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {    
	public function __construct (){
        parent:: __construct();
        $this->load->model('m_login');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index (){
        redirect(site_url('guru/index'));
        if($this->session->userdata('login') === "1"){
            echo $this->session->userdata('id_user_group');
            if($this->session->userdata('id_user_group') == 1){
                redirect(site_url ('guru/index'));
            }

            if($this->session->userdata('id_user_group') == 2){
                redirect(site_url ('siswa/index'));
            }
        }else{
            $user   = $this->input->post('username');
            $pass   = $this->input->post('password');

            $data_users = $this->m_login->select_login($user, $pass);
            if (count($data_users->result()) > 0){
                foreach ($data_users->result() as $data){
                    $sess['username']   = $data->username;
                    $sess['id_user']    = $data->id;
                    $sess['id_user_group']   = $data->id_user_group;
                }
                
                $sess['login']  = "1";
                $this->session->set_userdata($sess);

            }else{
                $this->session->set_flashdata("error", "<p>Kombinasi Username dan Password Tidak Dikenal</p>");
                redirect(site_url('home/index'));
                
            }
        }

        redirect(site_url('login'));
    }
    
    public function logout (){
        if ($this->session->userdata('login') == "1")
            $this->session->sess_destroy ();
        
        redirect (site_url ());
    }
}
