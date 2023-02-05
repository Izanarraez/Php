<?php
    class Pais{
        private $CasosActivos;
        private $Pais;
        private $UltimaModificacion;
        private $NuevosCaos;
        private $Muertos;
        private $TotalCasos;
        private $TotalMuertost;
        private $TotalRegistrados;

        public  function __construct($lista)
        {
          $this->CasosActivos = $lista["Active Cases_text"];
          $this->Pais = $lista["Country_text"];
          $this->UltimaModificacion = $lista["Last Update"];
          $this->NuevosCaos = $lista["New Cases_text"];
          $this->Muertos = $lista["New Deaths_text"];
          $this->TotalCasos = $lista["Total Cases_text"];
          $this->TotalMuertost = $lista["Total Deaths_text"];
          $this->TotalRegistrados = $lista["Total Recovered_text"];
        }

        public function getCasosActivos(){
            return $this->CasosActivos;
           }
           public function getPais(){
            return $this->Pais;
           }
           public function getUltimaModificacion(){
            return $this->UltimaModificacion;
           }
           public function getNuevosCaos(){
            return $this->NuevosCaos;
           }
           public function getMuertos(){
            return $this->Muertos;
           }
           public function getTotalCasos(){
            return $this->TotalCasos;
           }
           public function getTotalMuertost(){
            return $this->TotalMuertost;
           }
           public function getTotalRegistrados(){
            return $this->TotalRegistrados;
           }
          
           public function setCasosActivos($CasosActivos){
            return $this->CasosActivos = $CasosActivos;
           }
           public function setPais($Pais){
            return $this->Pais = $Pais;
           }
           public function setUltimaModificacion($UltimaModificacion){
            return $this->UltimaModificacion = $UltimaModificacion;
           }
           public function setNuevosCaos($NuevosCaos){
            return $this->NuevosCaos = $NuevosCaos;
           }
           public function setMuertos($Muertos){
            return $this->Muertos = $Muertos;
           }
           public function setTotalCasos($TotalCasos){
            return $this->TotalCasos = $TotalCasos;
           }
           public function setTotalMuertost($TotalMuertost){
            return $this->TotalMuertost = $TotalMuertost;
           }
           public function setTotalRegistrados($TotalMuertost){
            return $this->TotalRegistrados = $TotalMuertost;
           }
    }
?>