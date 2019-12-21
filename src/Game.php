<?php

namespace Ollieread\MMO\WS;

class Game
{
    private static ?Game $instance = null;

    public static function instance(): Game
    {
        if (! (self::$instance instanceof self)) {
            self::$instance = new static;
        }

        return self::$instance;
    }
}