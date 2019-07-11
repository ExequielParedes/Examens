<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acercade extends CI_Controller
{
    public function index(){
        $this->load->view('acerca');
    }

    public function acer(){
        $this->load->view('acerca');
    }
}