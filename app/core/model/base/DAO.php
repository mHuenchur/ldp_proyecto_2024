<?php

namespace app\core\model\base;

class DAO{
    protected $conn, $table;

    public function __construct($conn, $table)
    {
        $this->conn = $conn;
        $this->table = $table;
    }
}