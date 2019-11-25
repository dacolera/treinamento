<?php

namespace Tests;

use App\Bola;
use PHPUnit\Framework\TestCase;


class BolaTest extends TestCase
{
    public function test_classe_bola_existe()
    {
        $bola = new Bola;

        $this->assertInstanceOf(Bola::class, $bola);
    }

    public function test_can_create_bolas_cores_diferentes()
    {
        $bola = new Bola('azul');

        $this->assertEquals('azul', $bola->getColor());

        $bola2 = new Bola('verde');

        $this->assertEquals('verde', $bola2->getColor());
    }

    public function test_can_create_bolas_from_different_materials()
    {
        $bola = new Bola('branca', 'couro');

        $this->assertEquals('branca', $bola->getColor());
        $this->assertEquals('couro', $bola->getMaterial());
    }
}