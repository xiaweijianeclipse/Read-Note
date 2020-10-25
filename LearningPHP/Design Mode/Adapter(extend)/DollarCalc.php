<?php

class DollarCalc
{
    private $dollar;
    private $product;
    private $service;
    public $rate = 1;

    public function requestCalc($productNow, $servieNow)
    {
        $this->product = $productNow;
        $this->service = $servieNow;
        $this->dollar = $this->product + $this->service;
        return $this->requestTotal();
    }

    public function requestTotal()
    {
        $this->dollar *= $this->rate;
        return $this->dollar;
    }
}