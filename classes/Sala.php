<?php
    class Sala {

        private $id;
        private $name;
        private $seats;
        private $floor;


        public function __construct($_name, $_seats, $_floor){

            $this->$name = $_name;
            $this->$seats = $_seats;
            $this->$floor = $_floor;
        }

    }