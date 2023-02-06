<?php
    class Products{
        public $title;
        public $price;
        public $image;
        public $weight;

        function __construct($_title, $_price, $_image, $_weight){
            $this->title=$_title;
            $this->price=$_price;
            $this->image=$_image;
            $this->weight=$_weight;
        }
    }
?>