<?php
    class Accessories extends Animals{
        public $material;
        public $dimension;

        function __construct($_title, $_price, $_image, $_weight, $_name, $_icona, $_material, $_dimension){
            parent::__construct($_title, $_price, $_image, $_weight, $_name, $_icona);
            $this->material=$material;
            $this->dimension=$dimension;
        }
    }
?>