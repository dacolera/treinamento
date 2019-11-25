<?php

namespace App;

class Bola
{
    protected $cor;

    protected $material;

    public function __construct($cor = null, $material = null)
    {
        $this->cor = base64_encode($cor);
        $this->material = base64_encode($material);
    }

    public function getColor()
    {
        return  base64_decode($this->cor);
    }

    public function getMaterial()
    {
        return base64_decode($this->material);
    }
}