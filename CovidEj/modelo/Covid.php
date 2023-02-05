<?php
require_once("control/Pais.php");
    class Covid{
        static function Leer($pais){
            $url="https://covid-19.dataflowkit.com/v1/" . $pais;

            $decodificar = json_decode(file_get_contents($url),JSON_OBJECT_AS_ARRAY);
            return new Pais($decodificar);
        }

        static function LeerAnterior($pais){
            $contecto = unserialize(file_get_contents("covid"));
            foreach($contecto as $aux){
                if($aux->getPais() == $pais){
                    return $aux;
                }
            }
        }

        static function Registrar($pais){
            $contecto = unserialize(file_get_contents("covid"));
            $actual = (new Covid)->Leer($pais);
            
            /*foreach($contecto as $aux){
                if($aux->getPais() == $pais){*/
                    array_push($contecto,$actual);
                /*}
            } */
     
            $serial = serialize($contecto);
            file_put_contents("covid",$serial);
        }
    }
?>