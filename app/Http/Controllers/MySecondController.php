<?php

namespace App\Http\Controllers;

class MySecondController extends MyController
{
    /**
     * function abobora
     *
     * @param
     * @return
     */
    public function abobora($as = null)
    {
        //
    }

    /**
     * function mySecondAbobora
     *
     * @return
     */
    public function mySecondAbobora()
    {
        return $this->abobora('');
    }
}
