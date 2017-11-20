<?php

abstract class flag implements shape{
    private var $name = "";
    private var $color = "";
    
    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    
    function getName(){
        return this->$name;
    }
    function getColor(){
        return this->$color;
    }
    function __tostring(){
        return "Die Flagge von "+this->$name;
    }
}