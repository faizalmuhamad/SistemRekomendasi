<?php 

class m_guru extends CI_Model {
    function get_matpel(){
        $this->db->select('*');
        $this->db->from('r_matpel_tingkat_kelas mtk');
        $this->db->join('t_mata_pelajaran mp', 'mtk.id_mata_pelajaran = mp.id_mata_pelajaran');
        $this->db->join('r_tk_jurusan tj', 'mtk.id_tk_jurusan = tj.id_tk_jurusan');
        $this->db->join('t_tingkat_kelas tk', 'tk.id_tingkat_kelas = tj.id_tingkat_kelas');
        $this->db->join('t_jurusan j', 'j.id_jurusan = tj.id_jurusan');
        return $this->db->get();        
    }

    function get_matpel_by_id($id){
        $this->db->select('*');
        $this->db->from('r_matpel_tingkat_kelas mtk');
        $this->db->join('t_mata_pelajaran mp', 'mtk.id_mata_pelajaran = mp.id_mata_pelajaran');
        $this->db->join('r_tk_jurusan tj', 'mtk.id_tk_jurusan = tj.id_tk_jurusan');
        $this->db->join('t_tingkat_kelas tk', 'tk.id_tingkat_kelas = tj.id_tingkat_kelas');
        $this->db->join('t_jurusan j', 'j.id_jurusan = tj.id_jurusan');
        $this->db->where('id_matpel_tingkat_kelas', $id);
        return $this->db->get();        
    }
    function get_tingkat_kelas(){
        $this->db->select('*');
        $this->db->from('t_tingkat_kelas');
        return $this->db->get();
    }

    function get_jurusan(){
        $this->db->select('*');
        $this->db->from('t_jurusan');
        return $this->db->get();    
    }

    function get_support($id){
        $this->db->select('minSup');
        $this->db->from('t_rules');
        $this->db->where('id_matpel_tingkat_kelas', $id);
        $this->db->group_by("minSup");
        return $this->db->get();
    }
    
    function get_confidence($id){
        $this->db->select('minConf');
        $this->db->from('t_rules');
        $this->db->where('id_matpel_tingkat_kelas', $id);
        $this->db->group_by("minConf");
        return $this->db->get();
    }

    function get_id_rules_by_sup_conf($id, $sup, $conf){
        $this->db->select('*');
        $this->db->from('t_rules');
        $this->db->where('id_matpel_tingkat_kelas', $id);
        $this->db->where('minSup', $sup);
        $this->db->where('minConf', $conf);
        return $this->db->get();        
    }

    function get_rules($id, $sup, $conf){
        $this->db->select('*');
        $this->db->from('t_detail_rules dr');
        $this->db->join('t_rules r', 'r.id_rules = dr.id_rules');
        $this->db->where('r.minSup', $sup);
        $this->db->where('r.minConf', $conf);
        $this->db->where('r.id_matpel_tingkat_kelas', $id);
        return $this->db->get();        
    }

    function get_id_tk_jurusan($id_mapel){
        $this->db->select('id_tk_jurusan');
        $this->db->from('r_matpel_tingkat_kelas');
        $this->db->where('id_matpel_tingkat_kelas', $id_mapel);
        return $this->db->get();
    }

    function get_rule_aktif_by_id_tk_jurusan($id){
        $this->db->select('id_rules');
        $this->db->from('r_rule_aktif');
        $this->db->where('id_tk_jurusan', $id);
        return $this->db->get();
    }

    function get_id_rules($id){
        $this->db->select('id_rules');
        $this->db->from('t_rules');
        $this->db->where('id_matpel_tingkat_kelas', $id);
        return $this->db->get();    
    }

    function get_siswa_matpel($id){
        $this->db->select('*');
        $this->db->from('r_siswa_matpel sm');
        $this->db->join('t_siswa s', 's.id_siswa = sm.id_siswa');
        $this->db->join('r_matpel_tingkat_kelas mtk', 'mtk.id_matpel_tingkat_kelas = sm.id_matpel_tingkat_kelas');
        $this->db->join('r_tk_jurusan tj', 'mtk.id_tk_jurusan = tj.id_tk_jurusan');
        $this->db->join('t_mata_pelajaran p', 'p.id_mata_pelajaran = mtk.id_mata_pelajaran');
        $this->db->join('t_tingkat_kelas tk', 'tk.id_tingkat_kelas = tj.id_tingkat_kelas');
        $this->db->join('t_jurusan j', 'j.id_jurusan = tj.id_jurusan');
        $this->db->where('sm.id_matpel_tingkat_kelas', $id);
        return $this->db->get();        
    }

    function get_dataset_tersedia($id){
        $this->db->select('skor');
        $this->db->from('t_jawaban');
        $this->db->where('id_siswa', $id);
        return $this->db->get();    
    }

    function tambah_matpel($data){
        $this->db->insert('t_mata_pelajaran',$data);
        $query = $this->db->query('select last_insert_id()');
        $row = $query->row_array();
        return $row['last_insert_id()'];
    }

    function hapus_matpel($id){
        $this->db->where('id_mata_pelajaran', $id);
        $this->db->delete('t_mata_pelajaran');
    }

    function get_id_tk_jur($id_tk, $id_jur){
        $this->db->select('*');
        $this->db->from('r_tk_jurusan');
        $this->db->where('id_tingkat_kelas', $id_tk);
        $this->db->where('id_jurusan', $id_jur);
        return $this->db->get();
    }

    function tambah_tk_jur($data){      
        $this->db->insert('r_tk_jurusan',$data);
    }

    function tambah_matpel_tk($data){
        $this->db->insert('r_matpel_tingkat_kelas',$data);       
    }

    function hapus_matpel_tk($id){      
        $this->db->where('id_matpel_tingkat_kelas', $id);
        $this->db->delete('r_matpel_tingkat_kelas');
    }

    function get_id_matpel($id){
        $this->db->select('id_mata_pelajaran');
        $this->db->from('r_matpel_tingkat_kelas');
        $this->db->where('id_matpel_tingkat_kelas', $id);
        return $this->db->get();
    }

}
