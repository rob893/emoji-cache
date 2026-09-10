<?php

declare(strict_types=1);

namespace rob893\EmojiCache;

/**
 * A node in the cache's doubly linked recency list.
 *
 * Internal to the cache. 👉 points toward the least recently used end,
 * 👈 toward the most recently used end.
 */
final class 🦘️🦘️🦘️
{
    /** Next node, toward the least recently used end. */
    public ?🦘️🦘️🦘️ $👉 = null;

    /** Previous node, toward the most recently used end. */
    public ?🦘️🦘️🦘️ $👈 = null;

    /**
     * @param int|string $🔑 Cache key this node holds.
     * @param mixed      $🐬 Cached value.
     */
    public function __construct(
        public readonly int|string $🔑,
        public mixed $🐬,
    ) {
    }
}
