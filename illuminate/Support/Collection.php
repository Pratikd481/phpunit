<?php

namespace Illuminate\Support;

class Collection
{
    public $items;

    public function get()
    {
        $this->items = [];
        return  $this;
    }
}
