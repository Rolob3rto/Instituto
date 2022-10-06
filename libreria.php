<?php

class Libro{

    public $isbn = null;
    public $titulo = null;
    public $autor = null;

    function __construct($isbn, $titulo, $autor)
    {
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->autor = $autor;
    } 
    function getIsbn(){
        return $this->isbn;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    } 
}