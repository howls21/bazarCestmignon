<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Controlador extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("modelo");
    }

    public function index() {
        $this->load->view('bazar');
    }

    public function subirImagen() {
        $config['upload_path'] = './img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '2024';
        $config['max_height'] = '2008';
        $this->load->library('upload', $config);
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
        $cookies = array("user" => $datos['user'], "id" => $datos['id'], "type" => $datos['type'], "name" => $datos['name'],
            "surname" => $datos['surname'], "adress" => $datos['adress']);
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
        if ($this->session->userdata('type') == 1) {
            $id = '';
            $name = $this->input->post('name');
            $surname = $this->input->post('surname');
            $email = $this->input->post('email');
            $adress = $this->input->post('adress');
            $user = $this->input->post('user');
            $pass = $this->input->post('pass');
            $passConfirm = $this->input->post('passConfirm');
            $typeUser = $this->input->post('typeUser');
            if ($pass === $passConfirm) {
                $this->modelo->addUser($id, $name, $surname, $email, $adress, $user, md5($pass), $typeUser);
            } else {
                $msj = 'claves no coinciden';
            }
            echo json_encode(array("mensaje" => $msj));
        }
    }

    function adCategory() {
        if ($this->session->userdata('type') == 1) {
            $id = '';
            $name = $this->input->post('name');
            $description = $this->input->post('description');
            $this->modelo->adCategory($id, $name, $description);
        }
    }

    function adProduct() {
        $id = '';
        $idUser = $this->session->userdata('id');
        $idCategory = $this->input->post('idCategory');
        $name = $this->input->post('name');
        $foto = null;
        $description = $this->input->post('description');
        $marc = $this->input->post('marc');
        $model = $this->input->post('model');
        $price = $this->input->post('price');
        $stock = $this->input->post('stock');
        $date = date('Y-m-d');

        $this->modelo->adProduct($id, $idUser, $idCategory, $name, $foto, $description, $marc, $model, $price, $stock, $date);
    }

    function newConsumer() {
        $id = '';
        $name = $this->input->post('name');
        $surname = $this->input->post('surname');
        $email = $this->input->post('email');
        $adress = $this->input->post('adress');
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        $passConfirm = $this->input->post('passConfirm');
        $typeUser = $this->input->post('typeUser');
        if ($pass === $passConfirm) {
            $this->modelo->newConsumer($id, $name, $surname, $email, $adress, $user, md5($pass), $typeUser);
        } else {
            $msj = 'claves no coinciden';
        }
        echo json_encode(array("mensaje" => $msj));
    }

    function upDateUser() {
        if ($this->session->userdata('type') == 1) {
            $code = $this->input->post('code');
            $name = $this->input->post('name');
            $surname = $this->input->post('surname');
            $email = $this->input->post('email');
            $adress = $this->input->post('adress');
            $user = $this->input->post('user');
            $typeUser = $this->input->post('typeUser');
            $this->modelo->upDateUser($code, $name, $surname, $email, $adress, $user, $typeUser);
        }
    }

    function bazar() {
        $date['datos'] = $this->modelo->productList()->result();
        $this->load->view('vitrina', $date);
    }

    function userList() {
        if ($this->session->userdata('type') == 1) {
            $date['datos'] = $this->modelo->userList()->result();
            $this->load->view('admin/userList', $date);
        }
    }

    function userConsumer() {
        $code = $this->session->userdata('id');
        $date['datos'] = $this->modelo->userConsumer($code)->result();
        $this->load->view('consumer/editConsumer', $date);
    }

    function productListAdmin() {
        $date['datos'] = $this->modelo->productList()->result();
        $this->load->view('admin/productListAdmin', $date);
    }

    function categoryList() {
        $date['datos'] = $this->modelo->categoryList()->result();
        $this->load->view('admin/categoryListAdmin', $date);
    }

    function accesUser() {
        if ($this->session->userdata('type') == 1) {
            $this->load->view('admin/adminMenu');
        } else if ($this->session->userdata('type') == 2) {
            $this->load->view('consumer/consumerMenu');
        }
    }

    function newUser() {
        if ($this->session->userdata('type') == 1) {
            $this->load->view('admin/newUser');
        }
    }

    function newProduct() {
        if ($this->session->userdata('type') == 1) {
            $date['datos'] = $this->modelo->categoryList()->result();
            $this->load->view('admin/newProduct', $date);
        }
    }

    function newCategory() {
        if ($this->session->userdata('type') == 1) {
            $this->load->view('admin/newCategory');
        }
    }

    function upCategory() {
        if ($this->session->userdata('type') == 1) {
            $id = $this->input->post('code');
            $name = $this->input->post('name');
            $description = $this->input->post('description');
            $this->modelo->upCategory($id, $name, $description);
        }
    }

    function newPedido() {
        $datos = $this->cart->contents();
        $this->load->view('consumer/newPedido', $datos);
    }

    function deleteUser() {
        $code = $this->input->post('code');
        $this->modelo->deleteUser($code);
    }

    function deleteProduct() {
       $code = $this->input->post($code);
       $this->modelo->deleteProduct($code);
    }

    function deleteCategory() {
        $code = $this->input->post('code');
        $this->modelo->deleteCategory($code);
    }

    function editUser() {
        $code = $this->input->post('code');
        $respons = $this->modelo->editUser($code)->result();
        foreach ($respons as $fila):
            $nombre = $fila->nombre;
            $apellido = $fila->apellido;
            $email = $fila->email;
            $direccion = $fila->direccion;
            $usuario = $fila->usuario;
            $typeUser = $fila->tipo_usuario;
        endforeach;
        echo json_encode(array("id_usuario" => $code, "nombre" => $nombre, "apellido" => $apellido, "email" => $email, "direccion" => $direccion, "usuario" => $usuario, 'tipo_usuario' => $typeUser));
    }

    function edCategory() {
        $code = $this->input->post('code');
        $respons = $this->modelo->edCategory($code)->result();
        foreach ($respons as $fila):
            $nombre = $fila->nombre_categoria;
            $description = $fila->detalle_categoria;
        endforeach;
        echo json_encode(array(
            "id_categoria" => $code,
            "nombre_categoria" => $nombre,
            "detalle_categoria" => $description
        ));
    }

    function editProduct() {
        $code = $this->input->post('code');
        $category = $this->modelo->categoryList()->result();
        foreach ($category as $fila):
            $date['id_categoria'] = $fila->id_categoria;
            $date['nombre_categoria'] = $fila->nombre_categoria;
        endforeach;
        $respons = $this->modelo->editProduct($code)->result();
        foreach ($respons as $fila):
            $id = $fila->id_producto;
            $nombre = $fila->nombre;
            $descripcion = $fila->descripcion;
            $marca = $fila->marca;
            $modelo = $fila->modelo;
            $precio = $fila->precio;
            $stock = $fila->stock;
        endforeach;
        echo json_encode(array('id_producto' => $id,
            'nombre' => $nombre, 'descripcion' => $descripcion,
            'marca' => $marca, 'modelo' => $modelo, 'precio' => $precio, 'stock' => $stock, 'date' => $date));
    }

}

/* End of file controlador.php */
/* Location: ./application/controllers/controlador.php */