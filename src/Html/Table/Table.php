<?php

include_once("Thead.php");
include_once("Tbody.php");
include_once "Tfoot.php";
include_once "Database.php";


class Table
{
    private $db;
    private array $children = [];
    private $enabled;
    private $size;

    public function __construct($borderEnabled, $borderSize)
    {
        $this->enabled = $borderEnabled;
        $this->size = $borderSize;
        $this->db = new Database();
        array_push($this->children, new Thead($this->db->columns));
        array_push($this->children, new Tbody($this->db->rows, $this->db->columns));

    }

    public function draw()
    {
        if ($this->enabled != true) {
            echo "<table>";
            for ($i = 0; $i < count($this->children); $i++) {
                $this->children[$i]->draw();
            }
            echo "</table>";
        }
        else{
            echo "<table border='{$this->size}'";
            for ($i = 0; $i < count($this->children); $i++) {
                $this->children[$i]->draw();
            }
            echo "</table>";
        }
    }
}
