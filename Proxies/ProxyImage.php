<?php 

namespace Proxies;

use Interfaces\Image;
use Entities\RealImage;

class ProxyImage implements Image{
    private $image = null;
    private $filename = null;

    public function __construct(string $filename){
        $this->filename = $filename;
    }

    public function displayImage(){
        if($this->image == null){
            $this->image = new RealImage($this->filename);
        }
        $this->image->displayImage();
    }
}