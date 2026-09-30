<?php
use Prestamos\Enums\TipoEquipo;
//Formulario base de html para mostrar el formulario
// Para el formulario incluirá carnet estudiante. codigo del equipo, nombre del equipo y tipo del equipo previamente definidos
?>
<form action="index.php" method="post">
    <label for="carnet">Carnet del estudiante:</label>
    <input type="text" id="carnet" name="carnet" required><br><br>

    <label for="codigo">Código del equipo:</label>
    <input type="text" id="codigo" name="codigo" required><br><br>

    <label for="nombre">Nombre del equipo:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="tipo">Tipo de equipo:</label>
    <select id="tipo" name="tipo" required>
        <?php 
        //Mostrar la seleccion mediante un bucle recorriento los valores del enum
        foreach(TipoEquipo::cases() as $tipo){
            echo "<option value='{$tipo->value}'>{$tipo->name}</option>";
        }
        ?>
    </select><br><br>

    <input type="submit" value="Guardar">