<?php
include_once('Product.php');
include_once('FormatHelper.php');

class Kyrgyzstan implements Product
{

    private $mfgProduct;
    private $formatHelper;

    public function getProperties()
    {
        $this->formatHelper = new FormatHelper();
        $this->mfgProduct = $this->formatHelper->addTop();
        $this->mfgProduct .= $this->formatHelper->closeUp();
        return $this->mfgProduct;
    }
}