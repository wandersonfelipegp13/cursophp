<?php

namespace App\Model;

class Product {
    
    private $id, $name, $description;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
    
    public function getDesc() {
        return $this->description;
    }

    public function setDesc($description) {
        $this->description= $description;
    }

}
