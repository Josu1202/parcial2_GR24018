<?php 
namespace Prestamos\Enums;
use Prestamos\Modelos\{Equipo,Laptop, Proyector};
//Enum que va a guardar los tipos de los equipos y ademas, emplea un metodo crear equipo que instancia una clase de laptoop o proyector segun un caso match
enum TipoEquipo:string{
    case LAPTOP = "laptop";
    case PROYECTOR = "proyector";
    public function crearEquipo(string $nombre, string $codigo):Equipo{
        return match($this){
            self::LAPTOP => new Laptop($nombre, $codigo),
            self::PROYECTOR => new Proyector($nombre, $codigo)
        };
    }
}
?>