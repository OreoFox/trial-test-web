<?php

class Image
{
    public $image;
    public $alt;

    function __construct($img, $a){
        $this->image = $img;
        $this->alt = $a;
    }

    //render the image in an img tag with the alt description
    function render(){
        $image = $this->image;
        $alt = $this->alt;
        echo "<img src=$image alt=$alt>";
    }
}