<?php

namespace Rafael;

class StrHelper
{
    /**
     * function lower
     *
     * @param string $input
     * @return string
     */
    public static function lower(string $input): string
    {
        return \strtolower($input);
    }
}
