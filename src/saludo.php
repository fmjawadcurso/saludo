<?php
namespace Saludo\Saludo;
class Saludo {
    private $msn;

    public function __construct(){
        $this->setCrearSaludo();
    }

    private function  setCrearSaludo(){
       $this->msn = "HOLA MUNDO";
    }

    public function getCrearSaludo(){
        echo $this->msn;
    }
}