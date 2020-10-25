<?php
include_once("IMobileFormat.php");

class Mobile implements IMobileFormat
{

    private $head = "<!DOCTYPE html><html lang=\"en\"><head>";
    private $headClose = "<meta charset=\"UTF-8\"><title>Title</title></head>";
    private $cap = "</body></html>";

    private $sampleText;


    function formatCSS()
    {
        echo $this->head;
        echo "<link rel='stylesheet' href='mobile.css'>";
        echo $this->headClose;
        echo "<h1>Hello, Everyone</h1>";
    }

    function formatGraphics()
    {
        echo "<img class='pixRight' src='pix/fallRiver720.png' width=device-width-height=device-height   alt='river'>";
    }

    function verticalLayout()
    {
        $textFile = "text/lorem.txt";
        $opentext = fopen($textFile, 'r');
        $textInfo = fread($opentext, filesize($textFile));
        fclose($opentext);
        $this->sampleText = $textInfo;
        echo "<div>" . $this->sampleText . "</div>";
        echo "<p/><div>" . $this->sampleText . "</div>";
    }

    public function closeHTML()
    {
        echo $this->cap;
    }
}