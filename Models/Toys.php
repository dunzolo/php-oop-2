<?php
    class Toys extends Animals{
        public $characteristics;
        public $dimension;

        function __construct($_title, $_price, $_image, $_weight, $_name, $_icona, $_characteristics, $_dimension){
            parent::__construct($_title, $_price, $_image, $_weight, $_name, $_icona);
            $this->characteristics=$_characteristics;
            $this->dimension=$_dimension;
        }
    }
?>