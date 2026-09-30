<?php 
//Crear una excepcion personalizada para datos invalidos
class DatosInvalidosException extends Exception{
    public function __construct(string $mensaje){
        parent::__construct($mensaje);
    }
}

?>