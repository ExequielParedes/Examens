<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muestras extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->db->select('t.nombre, p.rutParticular, a.*');
        $this->db->join('TipoAnalisis AS t','t.idTipoAnalisis = a.idTipoAnalisis','left outer');
        $this->db->join('Particular AS p','p.idParticular = a.Particular_idParticular','left outer');
        $result = $this->db->get('AnalisisMuestras AS a')->result();
        $data = array('muestras' => $result);
        $this->load->view('muestras', $data);
    }

    function eliminar(){
        $this->db->where('idAnalisisMuestras',$_POST['idAnalisisMuestras']);
        echo $this->db->delete('AnalisisMuestras');
        redirect(base_url('Muestras'));
    }

    function editar($id){
        $this->db->where('idAnalisisMuestras',$id);
        $datos = array('muestra' => $this->db->get('AnalisisMuestras')->row());
        $this->load->view('editar_muestra',$datos);
    }

    function guardar(){
        $datos = array('fechaRecepcion' => $_POST['fecha'], 'temperaturaMuestra' => $_POST['temp'], 'cantidadMuestra' => $_POST['cantidad'], 'Particular_idParticular' => $_POST['usuario'], 'rutEmpleadoRecibe' => $this->session->userdata('user')->idEmpleado, 'idTipoAnalisis' => $_POST['tipo']);
        $this->db->where('idAnalisisMuestras',$_POST['idAnalisisMuestras']);
        $result = $this->db->update('AnalisisMuestras',$datos);
        redirect(base_url('Muestras'));
    }
}
?>