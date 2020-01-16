<?php

namespace App;


final class Gato extends Animal
{
    protected $rabo;

    public function __construct($cor, $idade, $rabo)
    {
        parent::__construct($cor, $idade);
        $this->rabo = $rabo;
    }

    public function miar()
    {
        return 'miiiiiaaaauuuuu';
    }

    public function comer()
    {
        return parent::comer() . 'zzzzz';
    }
}