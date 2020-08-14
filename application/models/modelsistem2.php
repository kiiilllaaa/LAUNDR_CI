<?php
    Class modelsistem2 extends CI_Model{


    public function simpann_db(){    
        $config['upload_path'] = '.assets';
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_size'] = '2048000';
        $config['file_name'] = url_title($this->input->post('gambar'));
        $filename = $this->upload->file_name;
        $this->upload->initialize($config);
        $this->upload->do_upload('gambar');
        $data = $this->upload->data();

        $data = array(
            'id' => "",
            'nama' => $this->input->post('namaa'),
            'alamat' => $this->input->post('alamatt'),
            'jenis_kelamin' => $this->input->post('jenis_kelaminn'),
            'phone' => md5($this->input->post('phonee'))
        );

        $this->db->insert('regis', $data);
        // echo "Data Berhasil Disimpan";
        header("Location:".base_url().'Dashboard/regiss');
    }

    public function get_user(){
        $data = $this->db->get('regis');
        return $data->result();
    }
    public function count_user(){
        $data = $this->db->get('regis');
        return $data->num_rows();
    }

    public function cek_login($table, $where){
        return $this->db->get_where($table,$where);
    }
}

    
?>