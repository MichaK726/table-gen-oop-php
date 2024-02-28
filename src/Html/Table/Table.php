<?php 

@include_once("./Table.php");

class Table
{
    private array $children = [];

    public function __construct($element)
    {
        $this->$children[] = $element;
    }

    public function draw(){
        echo "Tabel wordt gegenereerd <br />";
        echo $this->children[0]->draw();
    }
}

?>