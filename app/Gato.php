<?php

namespace App;


final class Gato extends Animal
{
    public function miar()
    {
        return 'miiiiiaaaauuuuu';
    }

    public function comer()
    {
        return parent::comer() . 'zzzzz';
    }
}