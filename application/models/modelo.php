<?php

class Modelo extends CI_Model
{

    function get_all()
    {
        $results = $this->db->get('productos')->result();
        return $results;
    }

    function conectUser($user, $pass)
    {
        $this->db->select("*");
        $this->db->where('usuario', $user);
        $this->db->where('clave', $pass);
        $date = $this->db->get("usuarios");

        $dateReturn['user'] = '';
        $dateReturn['id'] = '';
        $dateReturn['type'] = '';
        $dateReturn['name'] = '';
        $dateReturn['surname'] = '';
        $dateReturn['adress'] = '';

        foreach ($date->result() as $fila) {
            $dateReturn['user'] = $fila->usuario;
            $dateReturn['id'] = $fila->id_usuario;
            $dateReturn['type'] = $fila->tipo_usuario;
            $dateReturn['name'] = $fila->nombre;
            $dateReturn['surname'] = $fila->apellido;
            $dateReturn['adress'] = $fila->direccion;
        }
        return $dateReturn;
    }

    function productList()
    {
        $this->db->select('*');
        $this->db->where('stock >', 0);
        $this->db->order_by('nombre');
        return $this->db->get('productos');
    }

    /**
     * Funcion que busca el producto por id
     * @param int $id
     * @return Object $producto
    */
    function getProductById($id)
    {
        $this->db->select('*');
        $this->db->where('id_producto',$id);
        return $this->db->get('productos');
    }

    function userList()
    {
        $this->db->select('*');
        $this->db->order_by('nombre');
        return $this->db->get('usuarios');
    }

    function userConsumer($code)
    {
        $this->db->select('*');
        $this->db->where('id_usuario', $code);
        return $this->db->get('usuarios');
    }

    function categoryList()
    {
        $this->db->select('*');
        $this->db->order_by('nombre_categoria');
        return $this->db->get('categoria_productos');
    }

    function upCategory($id, $name, $description)
    {
        $data = array('id_categoria' => $id, 'nombre_categoria' => $name, 'detalle_categoria' => $description);
        $this->db->replace('categoria_productos', $data);
    }

    function userUnique($user)
    {
        $this->db->select('*');
        $this->db->where('usuario', $user);
        $date = $this->db->get('usuarios');

        if ($date == 0) {
            return true;
        } else {
            return false;
        }
    }

    function addUser($id, $name, $surname, $email, $adress, $user, $pass, $typeUser)
    {
        $data['id_usuario'] = $id;
        $data['nombre'] = $name;
        $data['apellido'] = $surname;
        $data['email'] = $email;
        $data['direccion'] = $adress;
        $data['usuario'] = $user;
        $data['clave'] = $pass;
        $data['tipo_usuario'] = $typeUser;

        $this->db->insert('usuarios', $data);
        return true;
    }

    function newConsumer($id, $name, $surname, $email, $adress, $user, $pass, $typeUser)
    {
        $data['id_usuario'] = $id;
        $data['nombre'] = $name;
        $data['apellido'] = $surname;
        $data['email'] = $email;
        $data['direccion'] = $adress;
        $data['usuario'] = $user;
        $data['clave'] = $pass;
        $data['tipo_usuario'] = $typeUser;

        $this->db->insert('usuarios', $data);
        return true;
    }

    function adCategory($id, $name, $description)
    {
        $data = ['id_categoria' => $id, 'nombre_categoria' => $name, 'detalle_categoria' => $description];
        $this->db->insert('categoria_productos', $data);
    }

    function adProduct($id, $idUser, $idCategory, $name, $foto, $description, $marc, $model, $price, $stock, $date)
    {
        $data = ['id_producto' => $id, 'id_usuario' => $idUser, 'id_categoria' => $idCategory,
            'id_detalle_pedido' => null, 'nombre' => $name, 'foto' => $foto, 'descripcion' => $description, 'marca' => $marc,
            'modelo' => $model, 'precio' => $price, 'stock' => $stock, 'fecha' => $date];
        $this->db->insert('productos', $data);
    }

    function deleteUser($code)
    {
        $this->db->where('id_usuario', $code);
        $this->db->delete('usuarios');
    }

    function deleteProduct($code)
    {
        //DELETE FROM `productos` WHERE `productos`.`id_producto` = 8
        $this->db->select('*');
        $this->db->where('id_producto', $code);
        $this->db->delete('productos');
    }

    function deleteCategory($code)
    {
        $this->db->where('id_categoria', $code);
        $this->db->delete('categoria_productos');
    }

    function editUser($code)
    {
        $this->db->select('*');
        $this->db->where('id_usuario', $code);
        return $this->db->get('usuarios');
    }

    function editProduct($code)
    {
        $this->db->select("*");
        $this->db->where('id_producto', $code);
        return $this->db->get('productos');
    }

    function edCategory($code)
    {
        $this->db->select('*');
        $this->db->where('id_categoria', $code);
        return $this->db->get('categoria_productos');
    }

    function upDateUser($code, $name, $surname, $email, $adress, $user, $typeUser)
    {
        $data['id_usuario'] = $code;
        $data['nombre'] = $name;
        $data['apellido'] = $surname;
        $data['email'] = $email;
        $data['direccion'] = $adress;
        $data['usuario'] = $user;
        $data['tipo_usuario'] = $typeUser;
        $this->db->select('*');
        $this->db->where('id_usuario', $code);
        $this->db->update('usuarios', $data);
    }

    //actualiza el producto con los datos del arreglo
    function upProduct($array)
    {
        $this->db->select('*');
        $this->db->where('id_producto',$array['id_producto']);
        $this->db->update('productos',$array);
    }

}

?>