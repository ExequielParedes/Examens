<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MiControlador extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->view('inicio');
        $this->load->view('Login');
    }
}
?>