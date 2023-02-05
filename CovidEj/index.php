<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        require_once("vista/Formulario.php");
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once("control/control.php");
    }
?>
