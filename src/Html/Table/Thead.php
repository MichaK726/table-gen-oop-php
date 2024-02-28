<?php

include_once("Trow.php");

class Thead
{
    private array $children = [];

    public function __construct($Columns)
    {
        $this->children[] = new Trow("Thead", $Columns, 0);
    }

    public function draw()
    {
        echo "<thead>";
        $this->children[0]->draw();
        echo "</thead>";
    }
}
