# Emoji Cache

LRU cache implementation but all identifiers are emojis.

## But why?

Irrelevant. This exists now.

## Usage:

```php
// Create new cache
$😈 = new 🐆🐆🐆();

$🔑 = 'foo';
$⚰️ = 12345;

// Check if cache has key. Will be false.
$😍 = $😈->🤔🤔🤔($🔑);

echo $😍;

// Set key value
$😈->✍️✍️✍️($🔑, $⚰️);

// Check if key exists. Will be true.
$💣 = $😈->🤔🤔🤔($🔑);

// Get value for key.
$⚔️ = $😈->🤔🤞😃($🔑);

// Get size of cache.
$📈 = $😈->👙💩🖇();

echo $💣;
echo $⚔️;
echo $📈;

// Clear cache.
$😈->❌❌❌();

// Check size again.
echo $😈->👙💩🖇();

```
