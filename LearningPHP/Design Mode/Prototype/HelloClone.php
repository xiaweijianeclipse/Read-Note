<?php

class HelloClone{
    private $builtInConstructor;
    public function __construct()
    {
        echo "Hello,Clone<br>";
        $this->builtInConstructor = "Constructor creation<br>";
    }

    public function doWork(){
        echo $this->builtInConstructor;
        echo "I'm doing the work!<p/>";
    }
}

$original = new HelloClone();
$original->doWork();

$cloneIt = clone $original;
$cloneIt->doWork();