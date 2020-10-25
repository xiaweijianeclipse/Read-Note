<?php
include_once("IACmePrototype.php");

class Engineering extends IACmePrototype
{
    const UNIT = "Engineering";
    private $development = "programming";
    private $design = "digital artwork";
    private $sysAd = "system administration";

    function setDept($orgCode)
    {
        switch ($orgCode) {
            case 301:
                $this->dept = $this->development;
                break;
            case 302:
                $this->dept = $this->design;
                break;
            case 303:
                $this->dept = $this->sysAd;
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