<?php

namespace App\Senders;

use App\Contracts\SenderInterface;

class Envia
{
    protected $sender;

    public function __construct(SenderInterface $sender)
    {
        $this->sender = $sender;
    }

    /**
     * function enviar
     *
     * @return void
     */
    public function enviar()
    {
        $this->sender->push();
    }
}
