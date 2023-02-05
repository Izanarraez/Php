<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        require_once("vista/Formulario.php");
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once("modelo/Covid.php");
        $data = (new Covid)->Leer($_POST["pais"]);

        require_once("vista/tabla.php");
    }
?>
