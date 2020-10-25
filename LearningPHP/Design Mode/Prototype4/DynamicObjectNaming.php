<?php
include_once('IPrototype.php');

class DynamicObjectNaming implements IPrototype
{

    const CONCRETE = "[Concrete] DynamicObjectNaming";

    public function __construct()
    {
        echo "This was dynamically created.<br>";
    }

    public function doWork()
    {
        echo "<br>This is the assigned task.</br>";
    }

    function __clone()
    {
        // TODO: Implement __clone() method.
    }
}

$employeeData = array('DynamicObjectNaming', 'Tess', 'mar', 'John', 'eng', 'Olivia', 'man');
$don = $employeeData[0];
$employeeData[6] = new $don;
echo $employeeData[6]::CONCRETE;
$employeeData[6]->doWork();