<?php

use PHPUnit\Framework\TestCase;

class DependenciesTest extends TestCase 
{
   /** 
   * @test 
   */
    public function check_empty(): array
    {
        $slack = [];
        $this->assertEmpty($slack);
        return $slack;
    }

    /** 
    * @test 
    * @depends check_empty
    */
    public function check_push( array $slack ): array
    {
        array_push( $slack , 'foo');
        $this->assertSame('foo', $slack[count($slack)-1]);
        $this->assertNotEmpty( $slack );
        return $slack;
    }
}
