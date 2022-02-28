<?php 


    class Spettacolo {


        private $Film;
        private $Sala;
        private $startDT;


        public function __construct(Film $_film, Sala $_sala, $_startDT){

            $this->Film = $_film;
            $this->Sala = $_sala;
            $this->startDT = $_startDT;
        }

    }