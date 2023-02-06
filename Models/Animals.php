<?php
    class Animals extends Products{
        public $name;
        public $icon;
        
        function __construct($_title, $_price, $_image, $_weight, $_name, $_icon){
            parent::__construct($_title, $_price, $_image, $_weight);
            $this->name=$_name;
            $this->icon=$_icon;
        }
    }
?>