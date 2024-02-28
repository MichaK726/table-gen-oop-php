<?php

include_once("Trow.php");

class Tbody
{
    private array $children = [];

    private $rows;
    private $columns;

    public function __construct($Rows, $Columns)
    {
        $this->columns = $Columns;
        $this->rows = $Rows;
        for ($i = 1; $i < $this->rows; $i++) {
            array_push($this->children, new Trow("Tbody", $this->columns, $i));
        }
    }

    public function draw()
    {
        echo "<tbody>";
        for ($i = 0; $i < count($this->children); $i++) {
            $this->children[$i]->draw();
        }
        echo "</tbody>";
    }
}
