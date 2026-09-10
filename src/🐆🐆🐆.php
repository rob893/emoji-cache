<?php

declare(strict_types=1);

namespace rob893\EmojiCache;

use InvalidArgumentException;

/**
 * A fixed-capacity least-recently-used (LRU) cache.
 *
 * Reads and writes are O(1). When a write pushes the cache past its
 * capacity, the least recently read or written entries are evicted
 * until it fits. Reading a key (🤔🤞😃) and writing a key (✍️✍️✍️)
 * both mark it as most recently used; checking for a key (🤔🤔🤔)
 * does not.
 */
final class 🐆🐆🐆
{
    /**
     * Key to node lookup for O(1) access.
     *
     * @var array<int|string, 🦘️🦘️🦘️>
     */
    private array $🌋 = [];

    /** Most recently used node. */
    private ?🦘️🦘️🦘️ $🗿 = null;

    /** Least recently used node; evicted first. */
    private ?🦘️🦘️🦘️ $🦶️ = null;

    /**
     * @param int $🦕 Maximum number of entries to hold. Must be at least 1.
     *
     * @throws InvalidArgumentException If capacity is less than 1.
     */
    public function __construct(private readonly int $🦕 = 250)
    {
        if ($🦕 < 1) {
            throw new InvalidArgumentException("Capacity must be at least 1, got {$🦕}.");
        }
    }

    /**
     * Whether the cache currently holds a value for the key.
     *
     * Does not affect recency.
     *
     * @param int|string $🔑 Key to look up.
     */
    public function 🤔🤔🤔(int|string $🔑): bool
    {
        return array_key_exists($🔑, $this->🌋);
    }

    /**
     * Store a value, marking the key as most recently used.
     *
     * Overwrites any existing value for the key. Evicts least recently
     * used entries if the cache is over capacity afterwards.
     *
     * @param int|string $🔑 Key to store under.
     * @param mixed      $🐬 Value to store. May be null.
     *
     * @return $this For chaining.
     */
    public function ✍️✍️✍️(int|string $🔑, mixed $🐬): static
    {
        if ($this->🤔🤔🤔($🔑)) {
            $this->❌🐙🌋($this->🌋[$🔑]);
        }

        $🦛️ = new 🦘️🦘️🦘️($🔑, $🐬);
        $this->✍️🦘️🗿($🦛️);
        $this->🌋[$🔑] = $🦛️;

        $this->⚖️⚖️⚖️();

        return $this;
    }

    /**
     * Fetch a value, marking the key as most recently used.
     *
     * Returns null for a missing key, which is indistinguishable from a
     * stored null. Use 🤔🤔🤔 first if that distinction matters.
     *
     * @param int|string $🔑 Key to fetch.
     */
    public function 🤔🤞😃(int|string $🔑): mixed
    {
        if (!$this->🤔🤔🤔($🔑)) {
            return null;
        }

        $☄️ = $this->🌋[$🔑];
        $this->✍️🦘️🗿($☄️);

        return $☄️->🐬;
    }

    /**
     * Remove every entry.
     */
    public function ❌❌❌(): void
    {
        $this->🗿 = null;
        $this->🦶️ = null;
        $this->🌋 = [];
    }

    /**
     * Number of entries currently held.
     */
    public function 👙💩🖇(): int
    {
        return count($this->🌋);
    }

    /**
     * Evict from the least recently used end until within capacity.
     */
    private function ⚖️⚖️⚖️(): void
    {
        while ($this->🦶️ !== null && $this->👙💩🖇() > $this->🦕) {
            $this->❌🐙🌋($this->🦶️);
        }
    }

    /**
     * Move a node to the most recently used end of the list.
     */
    private function ✍️🦘️🗿(🦘️🦘️🦘️ $🦀): void
    {
        $this->❌🦀🗿($🦀);

        if ($this->🗿 === null) {
            $this->🗿 = $🦀;
            $this->🦶️ = $🦀;

            return;
        }

        $🦀->👉 = $this->🗿;
        $this->🗿->👈 = $🦀;
        $this->🗿 = $🦀;
    }

    /**
     * Unlink a node from the list without touching the key map.
     */
    private function ❌🦀🗿(🦘️🦘️🦘️ $🦀): void
    {
        if ($🦀->👈 !== null) {
            $🦀->👈->👉 = $🦀->👉;
        }

        if ($🦀->👉 !== null) {
            $🦀->👉->👈 = $🦀->👈;
        }

        if ($this->🗿 === $🦀) {
            $this->🗿 = $🦀->👉;
        }

        if ($this->🦶️ === $🦀) {
            $this->🦶️ = $🦀->👈;
        }

        $🦀->👉 = null;
        $🦀->👈 = null;
    }

    /**
     * Remove a node from both the list and the key map.
     */
    private function ❌🐙🌋(🦘️🦘️🦘️ $🐙): void
    {
        $this->❌🦀🗿($🐙);
        unset($this->🌋[$🐙->🔑]);
    }
}
