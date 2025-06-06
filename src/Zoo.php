<?php

namespace App;

class Zoo {
    public function __construct() {
        echo "Zoo instancié !\n";
    }
}

abstract class Animal {
    private string $name;
    public function __construct(string $name) {
        $this->name = $name;
    }
     public function getName(): string
    {
        return $this->name;
    }
    protected abstract function getNoise(): string;
    public function noise(): string {
        return $this->getNoise();
    }
}