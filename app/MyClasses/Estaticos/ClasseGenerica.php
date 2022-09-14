<?php

namespace App\MyClasses\Estaticos;

class ClasseGenerica extends MinhaClasse
{
    public static $name = 'Rafael';

    /**
     * function horas
     *
     * @return
     */
    public function horas()
    {
        $var = new MinhaClasse();
        echo $var->queHorasSao();

        echo MinhaClasse::queHorasSao();
        echo MinhaClasse::$format;
        echo MinhaClasse::PID;
        echo $var->name;

        echo $this->getName();
    }
}
