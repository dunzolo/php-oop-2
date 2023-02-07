<?php
    class Toys extends Product{
        public $characteristics;
        public $dimension;


        function __construct($_title, $_price, $_image, $_weight, Animal $_animal, $_characteristics, $_dimension){
            parent::__construct($_title, $_price, $_image, $_weight, $_animal);
            $this->characteristics=$_characteristics;
            $this->dimension=$_dimension;
        }
    }
?>