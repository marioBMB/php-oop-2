<?php

    class Cinema {


        public $Sale = [];
        public $Spettacoli = [];
        public $name;
        public $capacity;
        public $address;


        public function __construct(array $_Sale, $_name, $_address){
            $this->Sale = $_Sale;
            $this->name = $_name;
            $this->address = $address;
            $this->setCapacity();
        }

        private function setCapacity(){

            foreach ($sale as $sala){
                $this->capacity += $sala->getSeats();
            }
        }

        private function setSpettacoli(array $Spettacoli){

            $this->Spettacoli = $_Spettacoli;
        }

        public function getAddress(){
            return $this->address;
        }

        public function getCapacity(){
            return $this->capacity;
        }

        private function getInfoSale(){

            $info = "n. Sale: ".count($this->$Sale);
            foreach ($sale as $sala){
                $info .= $sala->getInfo();
            }            
            return $info;
        }
   
        public function getNSale(){
            return count($this->$Sale);
        }

        public function getNSpettacoliFilm(int $filmId, $date){

            if (isset($this->Spettacoli)){

                $array = array_filter($this->Spettacoli, function($item){
                    
                    $day = new DateTime($item->startDT);
                    $day = $day->format("YY-MM-DD");
                    return $item->getId = $filmId && $day == $date;
                });
            }
            return count($array);
        }

        public function getOraUltimoSpettacolo(){
            
            if (isset($this->Spettacoli)){

                $lastDT = $this->Spettacoli[0];

                foreach($Spettacoli as $Spettacolo){

                    if ($lastDT->getEndDT() >= $Spettacolo->getEndDT()){
                        $lastDT = $Spettacolo;
                    }
                }
                return date('HH:mm', strtotime($lastDT->getEndDT));
            }
        }

        public function getInfoSpettacoli(){

            foreach($this->$Spettacoli as $Spettacolo){

                $Spettacolo->getInfo();
            }
        }

    }