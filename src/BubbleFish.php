<?php


namespace App;

use App\Animal;
class BubbleFish extends Animal {
  protected function getNoise(): string {
        return 'bloubloublou';
    }

}

?>