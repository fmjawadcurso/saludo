<?php
namespace Saludo\Saludo;
class Saludo {
    private $msn;
    private $usuario;

    public function __construct($usuario){
        $this->usuario = $usuario;
        $this->setCrearSaludo();
    }
      
        

    private function  setCrearSaludo(){
       $this->msn = "Bienvenido, Sr/Sra ".$this->usuario;
    }

    public function getCrearSaludo(){
        echo $this->msn;
    }
}