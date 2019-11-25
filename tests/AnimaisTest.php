<?php

namespace Tests;

use App\Animal;
use App\Gato;
use PHPUnit\Framework\TestCase;


class AnimaisTest extends TestCase
{
    public function test_gato_eh_do_tipo_gato_e_tipo_animal()
    {
        $gato = new Gato('branco', 2);

        $this->assertInstanceOf(Gato::class, $gato);
        $this->assertInstanceOf(Animal::class, $gato);
    }
}