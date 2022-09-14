<?php

use App\MyClasses\AuxiliatesDeClasses\Constantes;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('run', function () {
    // echo (new Constantes())->getClass() . PHP_EOL;
    echo (new Constantes())->getClassSelf() . PHP_EOL;
    echo (new Constantes())->getClassStatic() . PHP_EOL;
})->purpose('Run file');
