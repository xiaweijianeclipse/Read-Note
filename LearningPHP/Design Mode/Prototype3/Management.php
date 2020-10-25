<?php
include_once("IACmePrototype.php");

class Management extends IACmePrototype
{
    const UNIT = "Management";
    private $research = "research";
    private $plan = "planning";
    private $operations = "operations";

    function setDept($orgCode)
    {
        switch ($orgCode) {
            case 201:
                $this->dept = $this->research;
                break;
            case 202:
                $this->dept = $this->plan;
                break;
            case 303:
                $this->dept = $this->operations;
                break;
            default:
                $this->dept = "Unreconginzed Marketing";
                break;

        }
        // TODO: Implement setDept() method.
    }


    function getDept()
    {
        return $this->dept;
    }

    function __clone()
    {
        // TODO: Implement __clone() method.
    }
}