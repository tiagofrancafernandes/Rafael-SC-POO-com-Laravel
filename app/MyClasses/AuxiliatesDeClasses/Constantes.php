<?php

namespace App\MyClasses\AuxiliatesDeClasses;

class Constantes extends Pasta2\Pasta3\Classe
{
    use TraitExemplo;

    public function class($parametro = null)
    {
        if ($parametro instanceof \App\Qualquer\Class) {
            // faça isso
        }

        if ($parametro instanceof \App\Qualquer\ClassOne) {
            // faça isso
        }

        if ($parametro instanceof \App\Qualquer\ClassTwo) {
            // faça isso
        }

        // echo __CLASS__;
        // echo self::class;
        // echo static::class;
        // echo Constantes::class;
        // echo \App\MyClasses\AuxiliatesDeClasses\Constantes::class;
    }

    /**
     * function traitTwo
     *
     * @param
     * @return
     */
    public function traitTwo()
    {
        return $this->trait();
    }

    /**
     * function getClass
     *
     * @return
     */
    public function getClass()
    {
        // return 'CONSTANTES:' . static::class;
        // return __METHOD__;
        // return __FUNCTION__;
        // return __NAMESPACE__;
        // return __NAMESPACE__ . \PHP_EOL . __CLASS__ . \PHP_EOL;
    }
}
