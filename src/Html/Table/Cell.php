<?php

class Cell
{
    public $text = "";
    
    private $grandparent = "";

    public function __construct($Text, $Grandparent)
    {
        $this->text = $Text;
        $this->grandparent = $Grandparent;
    }

    public function draw()
    {
        if ($this->grandparent == "Thead") {
            echo "<th>";
            echo $this->text;
            echo "</th>";
        } else {
            echo "<td>";
            echo $this->text;
            echo "</td>";
        }
    }

}

