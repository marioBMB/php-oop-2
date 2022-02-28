<?php
    class SalaImmersiva extends Sala {

        private $vibrazione;
        private $fumo;
        private $acqua;


        public function __construct($_name, int $_seats, int $floor, boolean $_vibrazione, boolean $_fumo, boolean $_acqua){
            $this->vibrazione = isset($_vibrazione)? $_vibrazione : true;
            $this->fumo = isset($_fumo)? $_fumo : false;
            $this->acqua = isset($_acqua)? $_acqua : false;
        }

    }