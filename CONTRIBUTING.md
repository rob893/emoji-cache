# Contributing ✍️

## Code Changes 🤔

The rules are simple.

1. Your code must work. `composer check` must pass (PHPStan level 9 and PHPUnit).
2. You must add unit tests.
3. All identifiers must be emojis. This includes tests. Comments and docblocks may be text.

## Emoji Hygiene 🧼

Some emojis carry invisible characters: variation selectors (U+FE0F), zero-width joiners (U+200D), and keycap
markers. PHP and PSR-4 compare identifiers and file names byte for byte, so an emoji copied from a different source
may silently be a different identifier.

- Copy an existing identifier from the code rather than retyping it.
- A class name and its file name must match exactly, invisible characters included.
- Do not add trailing variation selectors to names. Check with `git diff --word-diff-regex=.` if unsure.

## Pull Requests 🤔

All code changes must be merged to the main branch by pull request.

Pull request titles and descriptions may contain text but MUST contain at least one emoji.

Thank you for helping make this abomination even more absurd!
😃😃😃
