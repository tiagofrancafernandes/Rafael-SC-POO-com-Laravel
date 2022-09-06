<?php

namespace App\Http\Controllers;

class MyController extends Controller
{
    /**
     * function abobora
     *
     * @param $aa
     * @return
     */
    public function abobora($aa)
    {
        return $this->myPrivateMethod();
    }

    /**
     * function myPrivateMethod
     *
     * @return
     */
    private function myPrivateMethod()
    {
        return __FILE__ . __LINE__;
    }
}
