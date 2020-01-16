<?php

namespace Tests;

use App\Animal;
use App\Cachorro;
use App\Calopsita;
use App\Gato;
use PHPUnit\Framework\TestCase;


class AnimaisTest extends TestCase
{
    public function test_gato_eh_do_tipo_gato_e_tipo_animal()
    {
        $gato = new Gato('branco', 2, 2);

        $this->assertInstanceOf(Gato::class, $gato);
        $this->assertInstanceOf(Animal::class, $gato);
    }

    /**
     * @dataProvider getAnimals
     */
    public function test_animal_sounds_eating($animal, $expected, $message)
    {
        $this->assertEquals($expected, $animal->comer(), $message);
    }

    /**
     * @return array
     * format [object, expected, message]
     */
    public function getAnimals()
    {
        return [
            [
                new Cachorro('malhado', 5),
                'vrac',
                'Erro ao verificar o som que o cachorro emite ao comer'
            ],
            [
                new Gato('cinza', 1, 1),
                'cruccrucuzzzzz',
                'Erro ao verificar o som que o gato emite ao comer'
            ],
            [
                new Calopsita('cinza', 1),
                'tictic',
                'Erro ao verificar o som que a calopsita emite ao comer'
            ],
            [

            ]
        ];
    }
}