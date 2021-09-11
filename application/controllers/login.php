<?php

class login extends CI_Controller {

    public function insert(){

        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            echo "Form Validation True";
        }
        else
        {
            $this->load->view('login');
                echo "Form Validation True";
                die();
        }
    }
}