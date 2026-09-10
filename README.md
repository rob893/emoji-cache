# Emoji Cache

[![CI](https://github.com/rob893/emoji-cache/actions/workflows/ci.yml/badge.svg)](https://github.com/rob893/emoji-cache/actions/workflows/ci.yml)

LRU cache implementation but all identifiers are emojis.

Yes. This is actually valid code and does indeed work.

## But why?

Irrelevant. This exists now.

## Requirements

PHP 8.3 or newer.

## Installation

Install using composer.

```
composer require rob893/emoji-cache
```

## Usage

```php
use rob893\EmojiCache\🐆🐆🐆;

// Create a cache that holds at most 250 entries (the default).
$😈 = new 🐆🐆🐆();

// Or pick your own capacity. Must be at least 1.
$🤏 = new 🐆🐆🐆(2);

$🔑 = 'foo';
$⚰️ = 12345;

// Check if cache has key. Will be false. Does not affect recency.
$😍 = $😈->🤔🤔🤔($🔑);

// Set key value. Returns the cache, so calls chain.
$😈->✍️✍️✍️($🔑, $⚰️)->✍️✍️✍️('bar', 'baz');

// Check if key exists. Will be true.
$💣 = $😈->🤔🤔🤔($🔑);

// Get value for key. Marks the key as most recently used.
// Returns null for a missing key, so check with 🤔🤔🤔 first if you store nulls.
$⚔️ = $😈->🤔🤞😃($🔑);

// Get size of cache.
$📈 = $😈->👙💩🖇();

// Clear cache.
$😈->❌❌❌();
```

## Behaviour

- Keys are `int|string`. Values can be anything, including `null`.
- Reading (`🤔🤞😃`) and writing (`✍️✍️✍️`) a key mark it as most recently used. Checking (`🤔🤔🤔`) does not.
- When a write pushes the cache past its capacity, the least recently used entries are evicted until it fits.
- A capacity below 1 throws `InvalidArgumentException`.

## Development

```
composer install
composer check   # PHPStan + PHPUnit
```
