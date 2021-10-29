<?php

namespace App\Model;

class ProductDAO {

    public function create(Product $p) {
        $sql = 'INSERT INTO products (name, description) VALUES (?,?)';

        $stmt = Connection::getConn()->prepare($sql);
        $stmt->bindValue(1, $p->getName());
        $stmt->bindValue(2, $p->getDesc());

        $stmt->execute();

    }

    public function read() {
    
    }

    public function update($p) {
    
    }

    public function delete() {
    
    }
}
