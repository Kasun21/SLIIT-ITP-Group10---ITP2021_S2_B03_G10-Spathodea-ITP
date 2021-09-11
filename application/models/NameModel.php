<?php 

class NameModel extends CI_Model
{

    function insertUserData() {

        $data = array (
            'name' => $this->input->post('name', TRUE),
            'email' => $this->input->post('email', TRUE),                              

        );

        print_r($data);

        $this->db->insert('names', $data);
        die();
    }
}