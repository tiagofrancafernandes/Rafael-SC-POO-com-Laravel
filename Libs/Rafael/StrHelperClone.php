<?php

namespace Rafael;

class StrHelperClone
{
    /**
     * function lower
     *
     * @param string $input
     * @return string
     */
    public static function lower(string $input): string
    {
        /*
            \Abc\StrHelperOutra

            é DIFERENTE de

            Abc\StrHelperOutra
        */

        return \Abc\StrHelperOutra::lower($input);
    }
}
