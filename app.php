<?php
require __DIR__ . '/vendor/autoload.php';

use App\BubbleFish;
use App\CatFish;
use App\ClownFish;
use App\Dove;
use App\Elephant;
use App\Fish;
use App\Parrot;
use App\Zebra;
use App\Zoo;

$zoo = new Zoo(); 

$animals = [
    Fish::class => 5,
    BubbleFish::class => 3,
    CatFish::class => 2,
    ClownFish::class => 1,
    Elephant::class => 2,
    Zebra::class => 1,
    Parrot::class => 10,
    Dove::class => 2,
];
var_dump(value: $animals);

foreach ($animals as $animalClass => $count) {
    for ($i = 0; $i < $count; $i++) {
        // Instantiate the animal with a name (e.g., class name or any string)
        $animalObj = new $animalClass($animalClass . " #" . ($i + 1));
        echo $animalObj->noise() . "\n";
    }
}
?>