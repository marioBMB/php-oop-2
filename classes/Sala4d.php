<?php
    class Sala4d extends Sala {

        private $vibration;
        private $smoke;
        private $water;


        public function __construct($_name, int $_seats, int $_floor, boolean $_vibration, boolean $_smoke, boolean $_water){
            parent::__construct($_name, $_seats, $_floor);
            $this->vibration = isset($_vibration)? $_vibration : true;
            $this->smoke = isset($_smoke)? $_smoke : false;
            $this->water = isset($_water)? $_water : false;
        }

        public function getInfo(){
            return "sala {$this->name}<br> piano: {$this->floor}<br> capacità: {$this->seats}<br> schermo: {$this->screenInches}<br> 
            effetti: {$this->getEffectsString()}";
        }

        public function getMainInfo(){
            return "sala {$this->name}<br> piano: {$this->floor}<br> effetti: {$this->getEffectsString()}";
        }

        public function setVibration(boolean $_vibration){
            $this->vibration = $this->$_vibration;
        }

        public function setSmoke(boolean $_smoke){
            $this->smoke = $this->$_smoke;
        }

        public function setWater(boolean $_water){
            $this->water = $this->$_water;
        }

        public function getEffectsString(){
            
            $effectsStr = "";
            $vars = get_class_vars(__CLASS__);

            foreach ($vars as $key => $value){
                if ($value == true){
                    $effectStr .= "$key, ";
                }
            }
            rtrim($effectsStr, ", ");
            return $effetsStr;
        }


    }