<?php

use PHPUnit\Framework\TestCase;

class CollectionClassTest extends TestCase
{
    /** @test */
    public function 
    during_the_initialization_all_will_return_empty()
    {
        $collection = new Illuminate\Support\Collection([]);
        $this->assertEmpty($collection->items);
    }

    /** @test */
    public function constructor_set_the_items()
    {
        $ar = [1, 2, 3];
        $collection = new Illuminate\Support\Collection($ar);
        $this->assertEquals($ar, $collection->items);
    }

    /** @test */
    public function all_will_return_full_array()
    {
        $ar = [1, 2, 3];
        $collection = new Illuminate\Support\Collection($ar);
        $this->assertEquals($ar, $collection->all());
    }

    /** @test */
    public function get_will_the_value_of_the_specific_key()
    {
        $ar = [
            'a' => 1,
            'b' => 2,
            'c' => 3
        ];
        $collection = new Illuminate\Support\Collection($ar);
        $this->assertEquals($ar['b'], $collection->get('b'));
    }

    /** @test */
    public function if_ket_key_not_found_then_return_null()
    {
        $ar = [
            'a' => 1,
            'b' => 2,
            'c' => 3
        ];
        $collection = new Illuminate\Support\Collection($ar);
        $this->assertEquals(NULL, $collection->get('d'));
    }
}
