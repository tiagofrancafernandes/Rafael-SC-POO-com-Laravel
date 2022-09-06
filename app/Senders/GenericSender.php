<?php

namespace App\Senders;

use App\Contracts\SenderInterface;

abstract class GenericSender implements SenderInterface
{
    /**
     * function push
     *
     * @return
     */
    public function push(): void
    {
        echo "Enviando..." . \PHP_EOL;
        \sleep(2);
        echo \PHP_EOL;
        echo "Enviado!" . \PHP_EOL;
    }
}
