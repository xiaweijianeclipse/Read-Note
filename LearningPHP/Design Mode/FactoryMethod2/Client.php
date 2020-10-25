<?php

include_once('CountryFactory.php');
include_once('Kyrgyzstan.php');

class Client
{
    private $countryFactory;

    public function __construct()
    {
        $this->countryFactory = new CountryFactory();
        echo $this->countryFactory->doFactory(new Kyrgyzstan());
    }
}

$worker = new Client();