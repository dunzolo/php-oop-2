<?php
    class Food extends Animals{
        public $ingredient;

        function __construct($_title, $_price, $_image, $_weight, $_name, $_icona, $_ingredient){
            parent::__construct($_title, $_price, $_image, $_weight, $_name, $_icona);
            $this->ingredient=$_ingredient;
        }
    }
?>