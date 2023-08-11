<?php
require_once 'animal.php';
class Ape extends animal
{
    public $legs = 2 . "<br>";
    public function yell()
    {
        echo "Yell : Auooo";
    }
}
?>