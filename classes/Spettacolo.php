<?php 


    class Spettacolo {

        private $Film;
        private $Sala;
        private $startDT;
        private $endDT;
        private $extraTimeMin;


        public function __construct(Film $_film, Sala $_sala, $_startDT, $_extraTimeMin = 15){

            $this->Film = $_film;
            $this->Sala = $_sala;
            $this->startDT = $_startDT;
            $this->extraTimeMin = $_extraTimeMin;
            $this->setEndDT($_film->getMinutes());
        }

        private function setEndDT($filmMinutes){

            $date = new DateTime($startDT);
            $totMinutes = $filmMinutes + $this->extraTimeMin;
            $date->add(new DateInterval('PT'.$totMinutes.'M')); //aggiunti 1 giorno e 10 ore
            $this->endDT = $date->format('Y-m-d H:i:s');
        }

        public function getStartDT() {
            return $this->startDT;
        }

        public function getEndDT() {
            return $this->endDT;
        }

        public function getInfo(){
            return [
                'filmInfo' => $this->Film->getMainInfo(),
                'castingInfo' => $this->Film->getCastingInfo(),
                'whenInfo' => $this->startDT,
                'whereInfo' => $this->$Sala->getUserInfo()
            ];
        }

        public function setSala($_Sala){
            $this->Sala = $_Sala;
        }

    }