<?php

class El extends CI_Controller{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('lab/el');
        $this->load->view('templates/footer');
    }
}