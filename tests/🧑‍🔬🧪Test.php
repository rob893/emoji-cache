<?php

declare(strict_types=1);

namespace rob893\EmojiCache\Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use rob893\EmojiCache\🐆🐆🐆;

final class 🧑‍🔬🧪Test extends TestCase
{
    #[Test]
    public function 🆕🔑🚫(): void
    {
        $😈 = new 🐆🐆🐆();

        $this->assertFalse($😈->🤔🤔🤔('foo'));
        $this->assertNull($😈->🤔🤞😃('foo'));
        $this->assertSame(0, $😈->👙💩🖇());
    }

    #[Test]
    public function ✍️🤔✅(): void
    {
        $😈 = new 🐆🐆🐆();
        $🔑 = 'foo';
        $⚰️ = 12345;

        $😈->✍️✍️✍️($🔑, $⚰️);

        $this->assertTrue($😈->🤔🤔🤔($🔑));
        $this->assertSame($⚰️, $😈->🤔🤞😃($🔑));
        $this->assertSame(1, $😈->👙💩🖇());
    }

    #[Test]
    public function 🔗➡️🔗(): void
    {
        $😈 = new 🐆🐆🐆();

        $this->assertSame($😈, $😈->✍️✍️✍️('foo', 1));
    }

    #[Test]
    public function ❌❌🧹(): void
    {
        $😈 = new 🐆🐆🐆();
        $😈->✍️✍️✍️('a', 1)->✍️✍️✍️('b', 2);

        $😈->❌❌❌();

        $this->assertSame(0, $😈->👙💩🖇());
        $this->assertFalse($😈->🤔🤔🤔('a'));
        $this->assertFalse($😈->🤔🤔🤔('b'));
    }

    #[Test]
    public function 📦🈵🚮(): void
    {
        $😈 = new 🐆🐆🐆(2);
        $😈->✍️✍️✍️('a', 1)->✍️✍️✍️('b', 2)->✍️✍️✍️('c', 3);

        $this->assertSame(2, $😈->👙💩🖇());
        $this->assertFalse($😈->🤔🤔🤔('a'));
        $this->assertTrue($😈->🤔🤔🤔('b'));
        $this->assertTrue($😈->🤔🤔🤔('c'));
    }

    #[Test]
    public function 👀🛡️🔁(): void
    {
        $😈 = new 🐆🐆🐆(2);
        $😈->✍️✍️✍️('a', 1)->✍️✍️✍️('b', 2);

        // Reading 'a' makes 'b' the least recently used entry.
        $😈->🤔🤞😃('a');
        $😈->✍️✍️✍️('c', 3);

        $this->assertTrue($😈->🤔🤔🤔('a'));
        $this->assertFalse($😈->🤔🤔🤔('b'));
        $this->assertTrue($😈->🤔🤔🤔('c'));
    }

    #[Test]
    public function ✍️🔁🛡️(): void
    {
        $😈 = new 🐆🐆🐆(2);
        $😈->✍️✍️✍️('a', 1)->✍️✍️✍️('b', 2);

        // Overwriting 'a' replaces its value and makes it most recently used.
        $😈->✍️✍️✍️('a', 99);
        $this->assertSame(2, $😈->👙💩🖇());
        $this->assertSame(99, $😈->🤔🤞😃('a'));

        $😈->✍️✍️✍️('c', 3);

        $this->assertSame(2, $😈->👙💩🖇());
        $this->assertTrue($😈->🤔🤔🤔('a'));
        $this->assertFalse($😈->🤔🤔🤔('b'));
        $this->assertTrue($😈->🤔🤔🤔('c'));
    }

    #[Test]
    public function 🔂🚮🔂(): void
    {
        $😈 = new 🐆🐆🐆(3);

        // Many rounds of eviction must keep the list and map in sync.
        for ($🔢 = 0; $🔢 < 100; $🔢++) {
            $😈->✍️✍️✍️($🔢, $🔢 * 2);
        }

        $this->assertSame(3, $😈->👙💩🖇());
        $this->assertFalse($😈->🤔🤔🤔(96));
        $this->assertSame(194, $😈->🤔🤞😃(97));
        $this->assertSame(196, $😈->🤔🤞😃(98));
        $this->assertSame(198, $😈->🤔🤞😃(99));
    }

    #[Test]
    public function ⚖️☝️(): void
    {
        $😈 = new 🐆🐆🐆(1);
        $😈->✍️✍️✍️('a', 1)->✍️✍️✍️('b', 2);

        $this->assertSame(1, $😈->👙💩🖇());
        $this->assertFalse($😈->🤔🤔🤔('a'));
        $this->assertSame(2, $😈->🤔🤞😃('b'));
    }

    #[Test]
    public function 🫥💾(): void
    {
        $😈 = new 🐆🐆🐆();
        $😈->✍️✍️✍️('nothing', null);

        $this->assertTrue($😈->🤔🤔🤔('nothing'));
        $this->assertNull($😈->🤔🤞😃('nothing'));
    }
}
