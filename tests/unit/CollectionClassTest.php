<?php

use PHPUnit\Framework\TestCase;

class CollectionClassTest extends TestCase
{
    /** @test */
    public function check_during_the_initialization_get_will_return_empty()
    {
        $collection = new Illuminate\Support\Collection();
        $this->assertEmpty($collection->items);
        $this->assertInstanceOf('Illuminate\Support\Collection', $collection->get());
    }
}
