<?php

namespace Ollieread\MMO\WS\Entities;

use Ds\Map;
use Ds\Sequence;
use Ollieread\MMO\WS\Contracts\Component;
use Ollieread\MMO\WS\Contracts\Components as Contract;

final class Components implements Contract
{
    private Map $components;

    public function __construct()
    {
        $this->components = new Map;
    }

    public function add(Component $component): self
    {
        $this->components->put(get_class($component), $component);

        return $this;
    }

    public function get(string $componentClass, $default = null): ?Component
    {
        return $this->components->get($componentClass, $default);
    }

    public function all(): Sequence
    {
        return $this->components->values();
    }
}