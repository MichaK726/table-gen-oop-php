<?php 
include_once "Cell.php";
include_once "Database.php";

class Trow{
    private $db;
    private $parent = '';
    private array $children = [];
    private $columns;
    private $id;
    
    public function __construct($Parent, $Columns, $ID){
        $this->db = new Database();
        $this->parent = $Parent;
        $this->columns = $Columns;
        $this->id = $ID;
        
        for($i = 0; $i < $this->columns; $i++){
            array_push($this->children, new Cell($this->db->data[$this->id][$i], $Parent));
        }
    }

    public function draw(){
        echo "<tr>";
        for ($i = 0; $i < $this->columns; $i++) {
            $this->children[$i]->draw();
        }
        echo "</tr>";
    }
} 

