<?php 

use Prestamos;
class Controlador{
    public function formulario(){
        //mostrar formulario para el metodo get 
        

    }
    public function guardar(){
        //guardar equipo
        // Recibir los datos del formulario
        $carnet = $_POST['carnet'];
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $tipo = $_POST['tipo'];
        $valor = $_POST['valor'];
       
    }
}
?>