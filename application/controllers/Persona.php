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
        $this->load->view('formulario.php',$data);


    }
    public function create(){
        // $dni= $this->input->post('txtdni');
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
                'rules' => 'required|numeric|max_length[8]|exact_length[8]|min_length[8]',
                'errors'=>array(
                    'required'=>'
                    <div class="alert alert-warning" role="alert">
                        Rellene el espacio de DNI
                    </div>
                    
                    
                    ',
                    'numeric'=>'
                    <div class="alert alert-danger" role="alert">
                       El espacio DNI no puede contener letras o espacios 
                    </div>
                    ',
                    'exact_length'=>'
                    <div class="alert alert-danger" role="alert">
                       Solo debe de mantener una combinación de 8 digitos
                    </div>
                    ',
                    'max_length'=>'
                    <div class="alert alert-danger" role="alert">
                       Solo se deben de ingresar 8 digitos
                    </div>
                    ',
                    'min_length'=>'
                    <div class="alert alert-danger" role="alert">
                       Rellene exactamente 8 digitos
                    </div>
                    ',
                ),
            ),
            
             array(
                'field' => 'txtNombre',
                'label' => 'Nombre',
                'rules' => 'required|max_length[25]|min_length[3]',
                'errors'=>array(
                    'required'=>'
                    <div class="alert alert-warning" role="alert">
                        Rellene el espacio de NOMBRE
                    </div>
                    ',
                    'max_length'=>'
                    <div class="alert alert-danger" role="alert">
                       Ingrese solo sus 2 nombres
                    </div>
                    ',
                    'min_length'=>'
                    <div class="alert alert-danger" role="alert">
                       Ingrese almenos un  nombre
                    </div>
                    ',
                    
                ),
            ),
            array(
                'field' => 'txtApellido',
                'label' => 'Apellido',
                'rules' => 'required|max_length[25]|min_length[3]',
                'errors'=>array(
                    'required'=>'
                    <div class="alert alert-warning" role="alert">
                        Rellene el espacio de APELLIDO
                    </div>
                    ',
                    'max_length'=>'
                    <div class="alert alert-danger" role="alert">
                       Ingrese solo sus 2 apellidos
                    </div>
                    ',
                    'min_length'=>'
                    <div class="alert alert-danger" role="alert">
                       Ingrese almenos un  apellido
                    </div>
                    '
                ),
            ),
            array(
                'field' => 'txtDireccion',
                'label' => 'Direccion',
                'rules' => 'required|max_length[55]|min_length[6]',
                'errors'=>array(
                    'required'=>'
                    <div class="alert alert-warning" role="alert">
                        Rellene el espacio de DIRECCIÓN
                    </div>
                    ',
                    'max_length'=>'
                    <div class="alert alert-danger" role="alert">
                       Ingrese  solo Pais,Lugar 
                    </div>
                    ',
                    'min_length'=>'
                    <div class="alert alert-danger" role="alert">
                       Ingrese solo su Pais
                    </div>
                    '
                ),
            ),
            array(
                'field' => 'txtTelefono',
                'label' => 'Apellido',
                'rules' => 'required|max_length[9]|min_length[9]|numeric',
                'errors'=>array(
                    'required'=>'
                    <div class="alert alert-warning" role="alert">
                        Rellene el espacio de TELEFONO
                    </div>
                    ',
                    'max_length'=>'
                    <div class="alert alert-danger" role="alert">
                    Ingrese solo 9 digitos
                    </div>
                    ',
                    'min_length'=>'
                    <div class="alert alert-danger" role="alert">
                       Ingrese 9 digitos
                    </div>
                    ',
                    'numeric'=>'
                    <div class="alert alert-danger" role="alert">
                       Ingrese solo numeros
                    </div>
                    '
                ),
            ),
            array(
                'field' => 'email',
                'label' => 'Correo',
                'rules' => 'required|valid_email',
                'errors' => array(
                    'required'=>'
                    <div class="alert alert-warning" role="alert">
                        Rellene el espacio de CORREO
                    </div>
                    ',
                    'valid_email'=>'
                    <div class="alert alert-danger" role="alert">
                       El email es invalido
                    </div>
                    ',
                    
                ),
             ),
             array(
                'field' => 'fecha',
                'label' => 'Fecha',
                'rules' => 'required|valid_date[02/10/2002]',
                'errors' => array(
                    'required'=>'
                    <div class="alert alert-warning" role="alert">
                        Rellene el espacio de FECHA DE NACIMIENTO
                    </div>
                    ',
                    'valid_date'=>'
                    <div class="alert alert-danger" role="alert">
                       Ingrese una fecha valida
                    </div>
                    ',
                ),
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
            
            <div class="alert alert-success" role="alert">
                Operación realizada
            </div>
            ';
             $this->load->view('formulario',$data);
            // var_dump($username.$email.$password.$password_c);
        }
        


    }
}
?>