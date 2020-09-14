<?php
namespace App\Model;

use App\Database\Db;

class Act extends Db {

    public function getAllAct(){

        $sql = "
        SELECT *  FROM Act
        ";
        $stmt = $this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return $data;

    }
}

?>