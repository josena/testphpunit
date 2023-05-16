<?php

namespace App;

Class Animal {
    public $nombre;
    public $edad;
    public $tipo;

    public function __construct($nombre, $edad, $tipo){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->tipo = $tipo;

    }


    public function saludar(): string{
        return "Hola soy un " . $this->tipo . " y me llamo " . $this->nombre . " y tengo " . $this->edad . " años";
    }
}


?>