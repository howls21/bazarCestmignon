<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Controlador extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("modelo");
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('bazar');
    }

    function divLogin() {
        $data['skin'] = 0;
        if ($this->session->userdata('skin')) {
            $data['type'] = $this->session->userdata("type");
            if ($this->session->userdata('type') == 1) {
                $this->load->view("divStateUser", $data);
            } else {
                $this->load->view("divStateUser");
            }
        } else {
            $this->load->view("divLogin");
        }
    }

    function conectUser() {
        $user = $this->input->post('user');
        $pass = md5($this->input->post('pass'));
        $datos = $this->modelo->conectUser($user, $pass);
        $cookies = array(
            "user" => $datos['user'],
            "type" => $datos['type'],
            "name" => $datos['name'],
            "surname" => $datos['surname'],
            "adress" => $datos['adress']
        );
        $msj = '';
        if ($datos['type'] != '') {
            $cookies['skin'] = true;
            $this->session->set_userdata($cookies);
            $msj = 'Usuario Correcto!';
        } else {
            $msj = 'Usuario incorrecto!';
        }
        echo json_encode(array("mensaje" => $msj));
    }

    function close() {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    function addUser() {
        if ($this->session->userdata('type') == 1) {$name = $this->input->post('name');$surname = $this->input->post('surname');
            $email = $this->input->post('email');
            $adress = $this->input->post('adress');
            $user = $this->input->post('user');
            $pass = $this->input->post('pass');
            $passConfirm = $this->input->post('passConfirm');
            if($pass != $passConfirm){
                $msj = 'Las Claves Son distintas';
            }else if ($this->modelo->userUnique($user) == true){
                $pass = md5($passConfirm);
                $type = '1';
                $this->modelo->addUser($name, $surname, $email, $adress, $user, $pass, $type);
                $msj = 'Usuario Registrado con exito';
            }else{
                $msj = 'el usuario ya existe';
            }
            
        }else{
            $msj = 'No tienes permisos para esta operacion';
        }
        echo json_encode(array("mensaje" => $msj));
    }

    function bazar() {
        $date['datos'] = $this->modelo->productList()->result();
        $this->load->view('vitrina', $date);
    }

    function userList() {
        $date['datos'] = $this->modelo->userList()->result();
        $this->load->view('userList', $date);
    }

    function accesUser() {
        if ($this->session->userdata('type') == 1) {
            $this->load->view('adminMenu');
        } else if ($this->session->userdata('type') == 2) {
            $this->load->view('consumerMenu');
        } else {
            
        }
    }

    function newUser() {
        if ($this->session->userdata('type') == 1) {
            $this->load->view('newUser');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/controlador.php */