<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cliente extends CI_Controller
{
    public function index()
    {
        $this->load->view('login');
    }

    public function guardar(){
    	$datos = array(
    		'rutParticular' => $_POST['rut'], 
    		'passwordParticular' => $_POST['passwd'],
    		'nombreParticular' => $_POST['firstname'] . ' ' . $_POST['lastname'],
    		'direccionParticular' => $_POST['direccion'],
    		'emailParticular' => $_POST['email']
    		);
    	$result = $this->db->insert('Particular',$datos);
       	$data = array('result' => $result );
    	$this->load->view('post_registro',$data);
    }

    public function login(){
    	// Hay varias formas de hacer un login. la mas facil y básica es hacer un select con el email o nombre del usuario y la contraseña.
    	// La query va a buscar en la base de datos una columna con el nombre y contraseña del usuario
    	// Primero seleccionamos la tabla a la cual queremos consultar
    	$this->db->from('Particular');
    	// Luego preguntamos por una columna que contanga el username que introdujimos en el formulario que coincida con el email de la tabla.
    	$this->db->where('emailParticular',$_POST['username']);
    	// Hacemos lo mismo pero con la contraseña
    	$this->db->where('passwordParticular',$_POST['password']);
    	// Luego se ejecuta la query y se obtiene el resultado
    	$result = $this->db->get();
    	//Ahora preguntamos si es que se obtuvo algún dato
    	if ($result->num_rows() === 1) {
    		// Guardamos los datos del usario en el navegador
    		$this->session->set_userdata('user',$result->row());
    		// Le mandamos un mensaje al usuario diciendo que se logeo correctamente
    		$this->session->set_flashdata('login_success','Ha ingresado correctamente al sistema');
    		// Redireccionamos a la página de inicio
    		redirect(base_url());
    	}else{
    		// Si no hay datos el se devuelve a la página de logeo.
    		$this->session->set_flashdata('login_unsuccess','Datos incorrectos');
    		redirect(base_url('cliente'));
    	}
    }
}
?>