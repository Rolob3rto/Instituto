<?php

class Socio{

    public $Dni = null;
    public $Nombre = null;
    public $Apellidos = null;
    public $Edad = null;
    public $Direccion = null;

    function __construct($Dni, $Nombre, $Apellidos, $Edad, $Direccion)
    {
        $this->Dni = $Dni;
        $this->Nombre = $Nombre;
        $this->Apellidos = $Apellidos;
        $this->Edad = $Edad;
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
    public function getEdad()
    {
        return $this->Edad;
    }
    public function getDireccion()
    {
        return $this->Direccion;
    } 
}