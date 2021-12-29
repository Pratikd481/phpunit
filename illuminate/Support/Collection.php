<?php

namespace Illuminate\Support;

class Collection
{
    public $items;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function all()
    {
        return  $this->items;
    }

    public function get($key)
    {
        if (isset($this->items[$key])) {
            return $this->items[$key];
        }
        return NULL;
    }
}
