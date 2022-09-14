<?php

namespace App\MyClasses\Estaticos;

class MinhaClasse
{
    public const PID = 1233;
    public $name = 'Tiago';
    public static $format = 'H:i:s';

    public function __construct($name = false)
    {
        // é executado sempre que a classe é instanciada
    }

    /**
     * function queHorasSao
     *
     * @return
     */
    public static function queHorasSao()
    {
        return date(static::$format);
    }

    /**
     * function getName
     *
     * @return
     */
    public static function getName()
    {
        return (new static())->name;
    }

    /**
     * function ligarParaAMae
     *
     * @return
     */
    public function ligarParaAMae()
    {
        return 'Olá mãe';
    }
}
