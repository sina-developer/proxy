<?php

require("./autoload.php");

use Proxies\ProxyImage;

$img1 = new ProxyImage("USER_1.png");
$img2 = new ProxyImage("USER_2.png");

$img1->displayImage();
$img2->displayImage();
$img1->displayImage();