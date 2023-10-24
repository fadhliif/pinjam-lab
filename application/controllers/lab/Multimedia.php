<?php

Class Multimedia extends CI_Controller{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('lab/multimedia');
        $this->load->view('templates/footer');
    }
}