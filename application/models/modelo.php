<?php
class Modelo extends CI_Model {
    function conectUser($user,$pass){
        $this->db->select("*");
        $this->db->where('usuario', $user);
        $this->db->where('clave', $pass);
        $date = $this->db->get("usuarios");

        $dateReturn['user'] = '';
        $dateReturn['type'] = '';
        $dateReturn['name'] = '';
        $dateReturn['surname'] = '';
        $dateReturn['adress'] = '';

        foreach ($date->result() as $fila) {
            $dateReturn['user'] = $fila->usuario;
            $dateReturn['type'] = $fila->tipo_usuario;
            $dateReturn['name'] = $fila->nombre;
            $dateReturn['surname'] = $fila->apellido;
            $dateReturn['adress'] = $fila->direccion;
        }
        return $dateReturn;
    }
    function productList(){
        $this->db->select('*');
        $this->db->where('stock >',0);
        $this->db->order_by('nombre');
        return $this->db->get('productos');
    }
    function userList(){
        $this->db->select('*');
        $this->db->order_by('nombre');
        return $this->db->get('usuarios');
    }
    function userUnique($user){
        $this->db->select('*');
        $this->db->where('usuario !=',$user);
        $date = $this->db->get('usuarios');

        if ($date == 0) {
            return true;
        }else{
            return false;
        }
    }
    function addUser($name, $surname, $email, $adress, $user, $pass, $type){
        $data['nombre'] = $name;
        $data['apellido'] = $surname;
        $data['email'] = $email;
        $data['direccion'] = $adress;
        $data['usuario'] = $user;
        $data['clave'] = $pass;
        $data['tipo_usuario'] = $type;
        
        $this->db->insert('usuarios', $data);
        
    }
}?>