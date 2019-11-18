<?php

namespace Tests;

use App\Collection;
use PHPUnit\Framework\TestCase;
use IteratorAggregate;

/**
 * Class CollectionTest
 * @package Tests
 */
class CollectionTest extends TestCase
{
    /**
     * @test
     */
    public function object_is_collection()
    {
        $collection = new Collection;

        $this->assertInstanceOf(Collection::class, $collection);
    }

    /**
     * @test
     */
    public function collection_can_count_itens()
    {
        $collection = new Collection(
            [
                'um',
                'dois',
                'tres'
            ]
        );

        $this->assertEquals(3, $collection->count());
    }

    /**
     * @test
     */
    public function can_create_empty_collection()
    {
        $collection = new Collection;

        $this->assertEquals(0, $collection->count());
    }

    /**
     * @test
     */
    public function can_get_all_items_of_collection()
    {
        $collection = new Collection(
            [
                'um',
                'dois',
                'tres'
            ]
        );

        $this->assertCount(3, $collection->get());
    }

    /**
     * @test
     */
    public function collection_is_iteratoraggregate()
    {
        $collection = new Collection;

        $this->assertInstanceOf(IteratorAggregate::class, $collection);
    }

    /**
     * @test
     */
    public function collection_is_iterable()
    {
        $collection = new Collection(
            [
                'um',
                'dois',
                'tres'
            ]
        );

        $items = [];

        foreach ($collection as $item) {
            $items[] = $item;
        }

        $this->assertCount(3, $items);
    }

    /**
     * @test
     */
    public function get_collection_as_json()
    {
        $collection = new Collection(
            [
                ["nome" => "wesley", "idade" => 23],
                ["nome" => "tiago", "idade" => 24],
                ["nome" => "jurandir", "idade" => 40]
            ]
        );

        $this->assertEquals(
            '[{"nome":"wesley","idade":23},{"nome":"tiago","idade":24},{"nome":"jurandir","idade":40}]',
            json_encode($collection)
        );
    }

    /**
     * @test
     */
    public function collection_is_printable()
    {
        $collection = new Collection(
            [
                ["nome" => "wesley", "idade" => 23],
                ["nome" => "tiago", "idade" => 24],
                ["nome" => "jurandir", "idade" => 40]
            ]
        );

        $this->assertEquals("Essa é uma coleção e nao deve ser printada", $collection);
    }




}