<?php

declare(strict_types=1);

namespace rob893\EmojiCache;

class 🐆🐆🐆
{
    private int $🦕;

    private array $🌋 = [];

    private ?🦘️🦘️🦘️ $🗿 = null;

    private ?🦘️🦘️🦘️ $🦶️ = null;

    public function __construct(int $🦕 = 250)
    {
        $this->🦕 = $🦕;
    }

    public function 🤔🤔🤔($🔑): bool
    {
        return array_key_exists($🔑, $this->🌋);
    }

    public function ✍️✍️✍️($🔑, $🐬): 🐆🐆🐆
    {
        if ($this->🤔🤔🤔($🔑)) {
            $🦍 = $this->🌋[$🔑];
            $this->❌🐙🌋($🦍);
        }

        $🦛️ = new 🦘️🦘️🦘️($🔑, $🐬);
        $this->✍️🦘️🗿($🦛️);
        $this->🌋[$🔑] = $🦛️;

        $this->⚖️⚖️⚖️();

        return $this;
    }

    public function 🤔🤞😃($🔑)
    {
        if (!$this->🤔🤔🤔($🔑)) {
            return null;
        }

        $☄️ = $this->🌋[$🔑];
        $this->✍️🦘️🗿($☄️);

        return $☄️->🐬;
    }


    public function ❌❌❌(): void
    {
        $this->🗿 = null;
        $this->🦶️ = null;
        $this->🌋 = [];
    }

    public function 👙💩🖇(): int
    {
        return count($this->🌋);
    }

    private function ⚖️⚖️⚖️(): void
    {
        $💋 = $this->🦶️;

        while ($💋 !== null && $this->👙💩🖇() > $this->🦕) {
            $🪅 = $💋->👈;
            $this->❌🐙🌋($💋);
            $💋 = $🪅;
        }
    }

    private function ✍️🦘️🗿(🦘️🦘️🦘️ $🦀): void
    {
        $this->❌🦀🗿($🦀);

        if ($this->🗿 === null) {
            $this->🗿 = $🦀;
            $this->🦶️ = $🦀;
        } else {
            $🦀->👉 = $this->🗿;
            $this->🗿->👈 = $🦀;
            $this->🗿 = $🦀;
        }
    }

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

    private function ❌🐙🌋(🦘️🦘️🦘️ $🐙): bool
    {
        $this->❌🦀🗿($🐙);

        if ($this->🤔🤔🤔($🐙->🔑)) {
            unset($this->🌋[$🐙->🔑]);
            return true;
        }

        return false;
    }
}
