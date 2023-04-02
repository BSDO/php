<?php 
    include("models/Car.php");


    class CarDao implements DaoInterface{

        private $link;
        public function __construct(PDO $link){
            $this->link =  $link;
        }



        public function InsertValida(Car $car){
            $result = $this->link->prepare("INSERT INTO carro(marca,km,color) VALUES (:marca,:km ,:color)");

            $result->bindParam(":marca",$car->getMarca());
            $result->bindParam(":km",$car->getKm());
            $result->bindParam(":color",$car->getColor());

            $result->execute();
        }
        public function findAll(){
            $cars = [];

            $result = $this->link->query("SELECT * FROM carro");

            $data = $result->fetchAll();

            foreach($data as $carro){

                $car = new Car();

                $car->setIdcarro($carro["idcarro"]);
                $car->setMarca($carro["marca"]);
                $car->setKm($carro["km"]);
                $car->setColor($carro["color"]);

                $cars[] =  $car;


            }
            

            return $cars;


        }   
    
    }
    
?>