<?php

namespace App\Models;

class Seller extends BaseModel
{
    public int $id;
    public string $name;
    public string $email;
    public static string $tableName = 'sellers';

    public function __construct($dbData)
    {
        $this->id = $dbData['seller_id'];
        $this->name = $dbData['seller_name'];
        $this->email = strtolower($dbData['seller_name']).'@company.com';
    }

    public function submitContact(string $message)
    {
        // $this->email
    }

    public static function all()
    {
        $results = (new Database)->select("SELECT * from sellers");
        $items = [];
        foreach($results as $result) {
            array_push($items, new self($result));
        }
        
        return $items;
    }
}