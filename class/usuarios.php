<?php
/*
Nombre: Alexander Almengor
Cedula: 8-923-938
Asunto: Proyecto Final
*/
require_once('modelo.php');

class usuarios extends modeloCredencialesBD{

    //Constructor
    public function __construct(){
        parent::__construct();
    }

    //Métodos
    //Consultas de inserción 

    public function registrar_usuario($name,$lname,$usr,$pwd){

        //Se recibe el ususario y contraseña encriptada
        $instruccion = "CALL pf_sp_registrar_usuario('" . $name . "','" . $lname.  "','" . $usr.  "','" . $pwd."')";
        //print_r($instruccion);

        //Se retorna el resultado de la consulta la cuál es un filtro con la claúsula WHERE
        $consulta = $this->_db->query($instruccion);
        //print_r($consulta);

        $this->_db->close();

        return $consulta;
    }

    //Consultas de actualización

    public function actualizar_usuario($id,$name,$lname,$usr,$pwd){

        //Se recibe el ususario y contraseña encriptada
        $instruccion = "CALL pf_sp_actualizar_usuario('" . $id . "','" . $name . "','" . $lname.  "','" . $usr. "','" . $pwd. "')";
        //print_r($instruccion);

        //Se retorna el resultado de la consulta la cuál es un filtro con la claúsula WHERE
        $consulta = $this->_db->query($instruccion);
        //print_r($consulta);

        $this->_db->close();

        return $consulta;
    }

    //Consultas de información 

    public function consultar_usuario($campo,$centinel){

        //Se recibe el ususario y contraseña encriptada
        $instruccion = "CALL pf_sp_consultar_usuario('" . $campo . "','" . $centinel . "')";
        //print_r($instruccion);

        //Se retorna el resultado de la consulta la cuál es un filtro con la claúsula WHERE
        $consulta = $this->_db->query($instruccion);
        //print_r($consulta);

        //Se hace fetch del objeto mysqli y se genera un arreglo unidimensional
        //El cuál tiene una fila, la cual es el resultado de la función count, de la cantidad de registros que coincidieron
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
        //print_r($resultado);

        //Si se encontró un resultado se devuelve
        if ($resultado){
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }

    //Consultas de validaciones

    public function validar_usuario($usr,$pwd){

        //Se recibe el ususario y contraseña encriptada
        $instruccion = "CALL pf_sp_validar_usuario('" . $usr . "','" . $pwd. "')";
        //print_r($instruccion);

        //Se retorna el resultado de la consulta la cuál es un filtro con la claúsula WHERE
        $consulta = $this->_db->query($instruccion);
        //print_r($consulta);

        //Se hace fetch del objeto mysqli y se genera un arreglo unidimensional
        //El cuál tiene una fila, la cual es el resultado de la función count, de la cantidad de registros que coincidieron
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
        //print_r($resultado);

        //Si se encontró un resultado se devuelve
        if ($resultado){
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }

    public function fetch_usr_data($consulta){

        //Se extrae la información recibida del arreglo de arreglos y se guarda en un arreglo
        foreach ($consulta as $resultado){
            $datos_usr['ID_USUARIO'] = $resultado['ID_USUARIO'];
            $datos_usr['NOMBRE'] = $resultado['NOMBRE'];
            $datos_usr['APELLIDO'] = $resultado['APELLIDO'];
            $datos_usr['USUARIO'] = $resultado['USUARIO'];
        }

        //Se traspasa la información del arreglo temporal al arreglo de sesión
        $_SESSION['id_usuario'] = $datos_usr['ID_USUARIO'];
        $_SESSION['nombre'] = $datos_usr['NOMBRE'];
        $_SESSION['apellido'] = $datos_usr['APELLIDO'];
        $_SESSION['usuario_valido'] = $datos_usr['USUARIO'];

        return $datos_usr;
    }
}