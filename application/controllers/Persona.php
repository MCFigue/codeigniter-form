<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('getMenu'));
        $this->load->library(array('form_validation'));
	}
    public function index(){
        $data['menu']=main_menu();
        $this->load->view('formulario',$data);

    }
    public function create(){
        $dni= $this->input->post('txtdni');
        // $nombre= $this->input->post('txtNombre');
        // $apellido= $this->input->post('txtApellido');
        // $direccion= $this->input->post('txtDireccion');
        // $telefono= $this->input->post('txtTelefono');
        // $email= $this->input->post('email');
        // $fecha= $this->input->post('fecha');
        $config= array(
            array(
                'field' => 'txtdni',
                'label' => 'DNI',
                'rules' => 'required|alpha_numeric',
                'errors'=>array(
                    'required'=>'
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Opps!</strong> Rellene DNI 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    
                    ',
                    'alpha_numeric'=>'<h1>Nombre no valido</h1>',

                ),
            // ),
            // array(
            //     'field' => 'email',
            //     'label' => 'Correo',
            //     'rules' => 'required|valid_email',
            //     'errors' => array(
            //         'required'=>'El %s es necesario ',
            //         'valid_email'=>'<h3>El %s es invalido </h3>'
            //     ),
             ),
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()==FALSE) {
            $data['menu'] =main_menu();
            $this->load->view('formulario',$data);
        }else{
            //return $this->load->view('success');
            $data['menu'] = main_menu();
            // .$nombre.$apellido.$direccion.$telefono.$email.$fecha
            //var_dump($dni);
            $data['msg']= '
            
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Bien!</strong> Operación Relizada.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
             $this->load->view('formulario',$data);
            // var_dump($username.$email.$password.$password_c);
        }
        


    }
}
?>