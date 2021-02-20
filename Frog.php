<?php
    class Frog extends Animal{
        private $legs = 4;
        private $cold_blooded = true;

        public function jump(){
            echo 'hop hop <br>';
        }

        public function get_legs(){ 
            return $this->legs . '<br>';
        }

        public function get_cold_blooded(){ 
            return var_export($this->cold_blooded) . '<br>';
        }
    }
?>