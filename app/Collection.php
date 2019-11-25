<?php

namespace App;

use IteratorAggregate;
use ArrayIterator;
use JsonSerializable;

/**
 * Class Collection
 * @package App
 */
class Collection implements IteratorAggregate, JsonSerializable
{
    protected $items = [];

    public function add($item)
    {
        $this->items[] = $item;
    }

    public function addItems(array $items)
    {
        foreach ($items as $item) {
            $this->add($item);
        }
    }

    /**
     *
     */
    public function count()
    {
        return count($this->items);
    }

    /**
     *
     */
    public function get()
    {
        return $this->items;
    }

    /**
     *
     */
    public function getIterator()
    {
        return new ArrayIterator($this->items);
    }

    /**
     *
     */
    public function jsonSerialize()
    {
        return $this->items;
    }

    /**
     *
     */
    public function __toString()
    {
        return "Essa é uma coleção e nao deve ser printada";
    }
}




