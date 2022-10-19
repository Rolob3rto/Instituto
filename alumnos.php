<?php

class Alumno{

    public $Dni = null;
    public $Nombre = null;
    public $Apellidos = null;
    public $Correo = null;
    public $Direccion = null;

    function __construct($Dni, $Nombre, $Apellidos, $Correo, $Direccion)
    {
        $this->Dni = $Dni;
        $this->Nombre = $Nombre;
        $this->Apellidos = $Apellidos;
        $this->Correo = $Correo;
        $this->Direccion = $Direccion;
    } 
    function getDni(){
        return $this->Dni;
    }

    public function getNombre()
    {
        return $this->Nombre;
    }

    public function getApellidos()
    {
        return $this->Apellidos;
    }
    public function getCorreo()
    {
        return $this->Correo;
    }
    public function getDireccion()
    {
        return $this->Direccion;
    } 
}