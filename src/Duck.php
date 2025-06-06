<?php

namespace App;
class Duck extends Animal{
  protected function getNoise(): string {
        return 'quack quack';
    }
}

?>