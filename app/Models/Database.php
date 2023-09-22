<?php

namespace App\Models;

use PDO;

class Database {
    public function getConnection() {
        // asumming config file or env file
        $path = __DIR__.'../../../db.sqlite';
        return new PDO("sqlite:$path");
    } 

    public function createTable(string $tableName, array $schema)
    {
        $schema = implode(', ', $schema);
        $this->getConnection()->prepare("CREATE TABLE $tableName ($schema)")->execute();
    }

    public function insert(string $table, $query)
    {
        $this->getConnection()->prepare("INSERT INTO $table $query")->execute();
    }

    public function select(string $query)
    {
        $st = $this->getConnection()->prepare($query);
        $st->execute();
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }
}