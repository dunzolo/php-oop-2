<?php
    class Product{
        public $title;
        public $price;
        public $image;
        public $weight;
        public $animal;

        function __construct($_title, $_price, $_image, $_weight, Animal $_animal){
            $this->title=$_title;
            $this->price=$_price;
            $this->image=$_image;
            $this->weight=$_weight;
            $this->animal=$_animal;
        }
    }
?>