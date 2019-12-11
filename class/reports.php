<?php
/*
Nombre: Alexander Almengor
Cedula: 8-923-938
Asunto: Proyecto Final
*/
require_once('modelo.php');

class reports extends modeloCredencialesBD{

    //Constructor
    public function __construct(){
        parent::__construct();
    }

    //Métodos

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

}