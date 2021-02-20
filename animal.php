<?php
    class Animal{
        private $name;
        private $legs = 2;
        private $cold_blooded = false;

        public function __construct($name){
            $this->name = $name;
        }

        public function get_name(){
            return $this->name . '<br>';
        }

        public function get_legs(){ 
            return $this->legs . '<br>';
        }

        public function get_cold_blooded(){
            return var_export($this->cold_blooded) . '<br>';
        }
    }
?>