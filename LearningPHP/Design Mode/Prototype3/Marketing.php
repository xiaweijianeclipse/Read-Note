<?php

include_once('IACmePrototype.php');

class Marketing extends IACmePrototype
{

    const UNIT = "Marketing";
    private $sales = "sales";
    private $promotion = "promotion";
    private $strategic = "stragetic planning";

    function setDept($orgCode)
    {
        switch ($orgCode) {
            case 101:
                $this->dept = $this->sales;
                break;
            case 102:
                $this->dept = $this->sales;
                break;
            case 103:
                $this->dept = $this->strategic;
                break;
            default:
                $this->dept = "Unreconginzed Marketing";
                break;

        }
        // TODO: Implement setDept() method.
    }

    function getDept()
    {
        return $this->dept;// TODO: Implement getDept() method.
    }

    function __clone()
    {
        // TODO: Implement __clone() method.
    }
}