<?php
require_once("control/Pais.php");
    class Covid{
        static function Leer($pais){
            $url="https://covid-19.dataflowkit.com/v1/" . $pais;

            $decodificar = json_decode(file_get_contents($url),JSON_OBJECT_AS_ARRAY);
            return new Pais($decodificar);
        }

        static function LeerAnterior($pais){
            $contecto = unserialize(file_get_contents("../Covid"));
            /*$arr = array();
            $i = 0;*/
            foreach($contecto as $aux){
                if($aux->getPais() == $pais){
                    return new Pais($aux);
                }
            }
        }

        static function Registrar($pais){
            $actulizar = json_decode(file_get_contents($pais),JSON_OBJECT_AS_ARRAY);
            $consul = array();
            $i = 0;
            foreach($actulizar as $datos){
                
                $consul[$i++]=new Pais($datos);
            }
            return file_put_contents($pais,$consul);
        }
    }
?>