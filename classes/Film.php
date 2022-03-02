<?php 
    class Film {

        private $id;
        private $title;
        private $originalTitle;
        private $originalLang;
        private $year;
        private $minutes;
        private $poster;
        private $director; //regista
        private $genres = [];


        private $actors = [];


        public function __construct(array $info){

            if (!empty($info)){
                
                $class_vars = get_class_vars(__CLASS__);
                foreach ($class_vars as $key => $value) {
                    
                    if (key_exists($key, $info)){

                        if (is_array($info[$key])){
                        
                                for ($i = 0; $i < count($info[$key]); $i++){
                                    array_push($this->${$key."s"}, $info[$key][$i]);
                                }
                        }
                        else {
                            $this->$key = $info[$key];
                        }
                    }
                        // $value != ""? $this->$key = $info[$key] : $this->$key = NULL;
                }
            }
        }

        public function getMainInfo(){

            $genres = implode(", ",$this->genres); 
            $string = "<b>{$this->title}</b> [{$this->year}] - {$this->minutes} min. - " .$genres;
            return $string;
        }

        public function getCastingInfo(){

            
            
        }


        public function getTitle(){
            return $this->title;
        }
        
        public function getOriginalTitle(){
            return $this->getOriginalTitle;
        }

        public function getOriginalLang(){
            return $this->getOriginalLang;
        }

        public function getMinutes(){
            return $this->minutes;
        }

        public function getYear(){
            return $this->year;
        }

        public function getPoster(){
            return $this->poster;
        }

        public function getGenres(){
            return $this->genres;
        }

        public function addGenre($genre){
            array_push($this->genres, $genre);
        }

        public function addActor(Attore $actor){
            array_push($this->actors, $actor);
        }

        public function getDirector(){
            return $this->director;
        }

        public static function getFields(){
            return get_class_vars(__CLASS__);
        }

        public function setPoster($url){
            $this->poster = $url;
        }

        
    }