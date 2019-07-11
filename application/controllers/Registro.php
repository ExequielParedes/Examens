<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller{

    public function index(){
        $this->load->view('RegistroEmpresa');
    }

    public function guardar(){ 
        var_dump($_POST);
    }
}
?>