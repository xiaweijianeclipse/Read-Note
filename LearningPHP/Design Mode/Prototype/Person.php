<?php
include_once('CloneMe.php');

class Person extends CloneMe
{

    public function __construct()
    {
        $this->picture = "clone.jpg";
        $this->name = "Orginal";
    }

    public function display()
    {
        echo "<img src='$this->picture'>";
        echo "<br/>$this->name:<p/>";
    }


    function __clone()
    {
        // TODO: Implement __clone() method.
    }
}

$worker = new Person();
$worker->display();

$slacker = clone $worker;
$slacker->name = "cloned";
$slacker->display();