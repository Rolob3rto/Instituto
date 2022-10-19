<?php

class Asignatura{

    public $Codigo = null;
    public $Descripcion = null;

    function __construct($Codigo, $Descripcion)
    {
        $this->Codigo = $Codigo;
        $this->Descripcion = $Descripcion;
    } 
    function getCodigo(){
        return $this->Codigo;
    }

    public function getDescripcion()
    {
        return $this->Descripcion;
    }
 
}