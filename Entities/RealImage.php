<?php 

namespace Entities;

use Interfaces\Image;

class RealImage implements Image{
    
    private $filename = null;

    public function __construct(string $filename){
        $this->filename = $filename;
        $this->loadImage();
    }

    public function loadImage(){
        echo "Loading Image {$this->filename} Form Disk\n";
    }

    public function displayImage(){
        echo "Displaying Image {$this->filename}\n";
    }
}