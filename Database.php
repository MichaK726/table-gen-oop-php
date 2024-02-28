<?php
class Database
{
    public array $data = [
        ["ID", "Naam", "Aantal", "Prijs", "Totaal"],
        ["1", "Witte verf", "2", "&euro; 4.95", "&euro; 9.90"],
        ["1", "Witte verf", "2", "&euro; 4.95", "&euro; 9.90"],
        ["1", "Witte verf", "2", "&euro; 4.95", "&euro; 9.90"]
    ];

    public int $rows;
    public int $columns;

    public function __construct()
    {
        $this->rows = count($this->data);
        $this->columns = count($this->data[0]);
    }
}