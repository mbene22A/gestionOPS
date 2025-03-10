<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
   /** @test */
   public function addition_donne_resultat_correct()
   {
       $resultat = 2 + 2;
       $this->assertEquals(4, $resultat);
   }
}
