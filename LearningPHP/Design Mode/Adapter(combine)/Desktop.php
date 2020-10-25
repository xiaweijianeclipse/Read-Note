<?php

class Desktop implements IFormat
{
    private $head = "<!DOCTYPE html><html lang=\"en\"><head>";
    private $headClose = "<meta charset=\"UTF-8\"><title>Title</title></head>";
    private $cap = "</body></html>";

    private $sampleText;

    public function formatCSS()
    {
        echo $this->head;
        echo "<link rel='stylesheet' href='desktop.css'>";
        echo $this->headClose;
        echo "<h1>Hello, Everyone</h1>";
    }

    public function formatGraphics()
    {
        echo "<img class='pixRight' src='pix/fallRiver720.png' width='720' height='480' alt='river'>";
    }

    public function horizontalLayout()
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