<?php 
    class Film {

        private $id;
        private $title;
        private $originalTitle;
        private $originalLang;
        private $year;
        private $minutes;
        private $poster;
        private $director;
        private $genres = [];


        private $actors = [];


        public function __construct(array $info){

            // var_dump($info);
            // extract($info);

            if (!empty($info)){
                
                $class_vars = get_class_vars(__CLASS__);
                foreach ($class_vars as $key => $value) {
                    
                    if (key_exists($key, $info)){

                        if (is_array($info[$key])){
                        
                            if ($key == 'genres'){
                                for ($i = 0; $i < count($info[$key]); $i++){
                                    $this->addGenre($info[$key][$i]);
                                }
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