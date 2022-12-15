<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use rob893\EmojiCache\🐆🐆🐆;

class 🧑‍🔬🧪Test extends TestCase
{

  public function test☢️☢️☢️️(): void
  {
    $😈 = new 🐆🐆🐆();

    $🔑 = 'foo';
    $⚰️ = 12345;

    // Check if cache has key. Will be false.
    $😍 = $😈->🤔🤔🤔($🔑);
    $this->assertFalse($😍);

    // Set key value.
    $😈->✍️✍️✍️($🔑, $⚰️);

    // Check if key exists. Will be true.
    $💣 = $😈->🤔🤔🤔($🔑);
    $this->assertTrue($💣);

    // Get value for key.
    $⚔️ = $😈->🤔🤞😃($🔑);
    $this->assertEquals($⚰️, $⚔️);

    // Get size of cache.
    $📈 = $😈->👙💩🖇();
    $this->assertEquals(1, $📈);

    // Clear cache.
    $😈->❌❌❌();

    // Check size again.
    $this->assertEquals(0, $😈->👙💩🖇());
  }
}
