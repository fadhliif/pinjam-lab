<?php

class Bahasa extends CI_Controller{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('lab/bahasa');
        $this->load->view('templates/footer');
    }
}