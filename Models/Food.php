<?php
    class Food extends Product{
        public $ingredient;

        function __construct($_title, $_price, $_image, $_weight, Animal $_animal, $_ingredient){
            parent::__construct($_title, $_price, $_image, $_weight, $_animal);
            $this->ingredient=$_ingredient;
        }
    }
?>