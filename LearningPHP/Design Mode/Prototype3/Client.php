<?php
spl_autoload_register(function ($className) {
    include_once("./$className.php");
});

class Client
{
    private $market;
    private $manage;
    private $engineer;

    public function __construct()
    {
        $this->makeConProto();

        $Tess = clone $this->market;
        $this->setEmployee($Tess, "Tess Smith", 101, "ts101-1234", "tess.png");
        $this->showEmployee($Tess);
    }

    private function makeConProto()
    {
        $this->market = new Marketing();
        $this->manage = new Management();
        $this->engineer = new Engineering();
    }

    private function showEmployee(IACmePrototype $cmePrototype)
    {
        $px = $cmePrototype->getPic();
        echo "<img src= $px width='150' height='150'><br>";
        echo $cmePrototype->getName() . "<br>";
        echo $cmePrototype->getDept() . ":" . $cmePrototype::UNIT . "<br>";
        echo $cmePrototype->getId() . "<p/>";
    }

    private function setEmployee(IACmePrototype $cmePrototype, $nm, $dp, $id, $px)
    {
        $cmePrototype->setName($nm);
        $cmePrototype->setDept($dp);
        $cmePrototype->setId($id);
        $cmePrototype->setPic("pix/$px");
    }
}

$worker = new Client();