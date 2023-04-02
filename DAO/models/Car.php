<?php

    class Car {
        private $idcarro;
        private $marca;
        private $km;
        private $color;

        public function getIdcarro(){
            return $this->idcarro;
        }

        public function setIdcarro($idcarro){
            $this->idcarro = $idcarro;
        }

        public function getMarca(){
            return $this->marca;
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }
        public function getKm(){
            return $this->km;
        }

        public function setKm($km){
            $this->km = intval($km);
        }
        public function getColor(){
            return $this->color;
        }

        public function setColor($color){
            $this->color = $color;
        }

            
    }


    interface DaoInterface{
        public function InsertValida(Car $car);
        public function findAll();

        
    }


?>