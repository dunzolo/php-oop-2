<?php
    class Accessory extends Product{
        public $material;
        public $dimension;

        function __construct($_title, $_price, $_image, $_weight, Animal $_animal, $material, $_dimension){
            parent::__construct($_title, $_price, $_image, $_weight, $_animal);
            $this->material=$material;
            $this->dimension=$_dimension;
        }
    }
?>