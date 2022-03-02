<?php
    class Sala {

        private $id;
        protected $name;
        protected $seats;
        protected $floor;
        protected $screenResolution;
        private $is3d = false;


        public function __construct($_name, $_seats, $_floor, $_screenRes){

            $this->$name = $_name;
            $this->$seats = $_seats;
            $this->$floor = $_floor;
        }


        public function getInfo(){
            return "sala {$this->name}<br> piano: {$this->floor}<br> capacità: {$this->seats}<br> schermo: {$this->screenInches}<br>";
        }

        public function getMainInfo(){
            return "sala {$this->name}<br> piano: {$this->floor}<br>";
        }

        public function getSeats(){
            return $this->seats;
        }

    }