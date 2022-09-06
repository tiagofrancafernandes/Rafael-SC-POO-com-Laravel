<?php

namespace App\Contracts;

interface SenderInterface
{
    public function push(): void;
}
