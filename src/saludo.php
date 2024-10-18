<?php
namespace Saludo\Saludo;
class Saludo {
    private $msn;
    private $usuario;

    public function __construct($usuario){
        $this->setCrearSaludo();
        $this->usuario = $usuario;
    }

    private function  setCrearSaludo(){
       $this->msn = "bienvenido,Sr/Sra".$this->usuario;
    }

    public function getCrearSaludo(){
        echo $this->msn;
    }
}