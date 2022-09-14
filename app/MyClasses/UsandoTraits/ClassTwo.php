<?php

namespace App\MyClasses\UsandoTraits;

class ClassTwo
{
    use SendMailTrait;

    protected $name = 'Two';

    /**
     * Aqui vai outras informações, métodos e atributos da classe
     * */

    /**
     * function myFunctionOne
     *
     * @param $data
     * @return
     */
    public function myFunctionOne($data)
    {
        $this->sendMail('mesnagem');
    }

    /**
     * function myFunctionTwo
     *
     * @param $data
     * @return
     */
    public function myFunctionTwo($data)
    {
    }
}
