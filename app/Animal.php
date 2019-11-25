<?php

namespace App;

abstract class Animal
{
    protected $cor;

    protected $idade;

    public function __construct($cor, $idade)
    {
        $this->cor = $cor;
        $this->idade = $idade;
    }

    public function respirar()
    {
        return 'zzzzzzrzrzrrzrz';
    }

    public function comer()
    {
        return 'cruccrucu';
    }
}