<?php
    require_once '../modelo/Covid.php';
    
    //$data = (new Covid)->Leer("Spain");
    $data = (new Covid)->LeerAnterior("Spain");
    require_once("../vista/tabla.php");

?>  