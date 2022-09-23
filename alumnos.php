<?php

class Alumno {
    //ATRIBUTOS
    public $id;
    public $nombre;
    public $edad;

public function __construct($id,$nombre,$edad)
{
    $this->id = $id; //ID DE REFERENCIA A ATRIBUTO, 2º A CONTINUAR
    $this->nombre = $nombre;
    $this->edad = $edad;
}

}