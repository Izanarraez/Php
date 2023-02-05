<?php
    require_once("modelo/Covid.php");

    $data = (new Covid)->Leer($_POST["pais"]);
    $dataAnt = (new Covid)->LeerAnterior($_POST["pais"]);

    require_once("vista/tabla.php");

    $regis = new Covid();
    $regis->Registrar($_POST["pais"]);
?>