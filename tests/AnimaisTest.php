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
        $gato = new Gato('branco', 2);

        $this->assertInstanceOf(Gato::class, $gato);
        $this->assertInstanceOf(Animal::class, $gato);
    }

    public function test_cachorro_faz_som_vrac()
    {
        $cachorro  = new Cachorro('malhado', 5);

        $this->assertEquals('vrac', $cachorro->comer(), 'Erro ao verificar o som que o cachorro emite ao comer');
    }

    public function test_gato_come_com_som_hibrido_cruccrucuzzzzz()
    {
        $gato = new Gato('cinza', 1);

        $this->assertEquals('cruccrucuzzzzz', $gato->comer(), 'Erro ao verificar o som que o gato emite ao comer');
    }

    public function test_calopsita_come_com_som_tictic()
    {
        $calopsita = new Calopsita('cinza', 1);

        $this->assertEquals('tictic', $calopsita->comer(), 'Erro ao verificar o som que a calopsita emite ao comer');
    }
}