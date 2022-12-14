<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use rob893\EmojiCache\πππ;

class π§βπ¬π§ͺTest extends TestCase
{

  public function testβ’οΈβ’οΈβ’οΈοΈ(): void
  {
    $π = new πππ();

    $π = 'foo';
    $β°οΈ = 12345;

    // Check if cache has key. Will be false.
    $π = $π->π€π€π€($π);
    $this->assertFalse($π);

    // Set key value.
    $π->βοΈβοΈβοΈ($π, $β°οΈ);

    // Check if key exists. Will be true.
    $π£ = $π->π€π€π€($π);
    $this->assertTrue($π£);

    // Get value for key.
    $βοΈ = $π->π€π€π($π);
    $this->assertEquals($β°οΈ, $βοΈ);

    // Get size of cache.
    $π = $π->ππ©π();
    $this->assertEquals(1, $π);

    // Clear cache.
    $π->βββ();

    // Check size again.
    $this->assertEquals(0, $π->ππ©π());
  }
}
