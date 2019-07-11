<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RecepcionMuestra extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->load->view('recepcion_muestra');
    }

    function guardar(){
        $datos = array('fechaRecepcion' => $_POST['fecha'],
         'temperaturaMuestra' => $_POST['temp'],
          'cantidadMuestra' => $_POST['cantidad'], 
          'Particular_idParticular' => $_POST['usuario'], 
          'rutEmpleadoRecibe' => $this->session->userdata('user')->idEmpleado, 
          'idTipoAnalisis' => $_POST['tipo']);
    	$result = $this->db->insert('AnalisisMuestras',$datos);
		redirect(base_url('Muestras'));
    }
}
?>