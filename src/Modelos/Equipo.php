<?php 
namespace Prestamos\Modelos;

abstract class Equipo{
    public function __construct(protected readonly string $nombre, protected readonly string $codigo ){

    }

    abstract public function diasMaximoPrestamo():int;

}
?>
