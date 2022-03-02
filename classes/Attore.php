<?php 
    class Attore {

        private $id;
        private $name;
        private $surname;
        private $alsoKnownAs;
        private $birthday;
        private $deathday = null;
        private $gender;


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
                }
            }
        }



    }