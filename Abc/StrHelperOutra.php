<?php

namespace Abc;

use Rafael\StrHelper;

class StrHelperOutra
{
    /**
     * function lower
     *
     * @param string $input
     * @return string
     */
    public static function lower(string $input): string
    {
        \dump(self::class);

        return StrHelper::lower($input);
    }
}
