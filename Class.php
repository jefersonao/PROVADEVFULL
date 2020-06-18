<?php

class Produto
{

    var $prop1;
    var $prop3;
    var $prop2;

    function Produto($prop1, $prop2, $prop3)
    {
        $this->$prop1 = $prop1;
        $this->$prop2 = $prop2;
        $this->$prop3 = $prop3;

        try {
            $result =  $this->$prop1 *  $this->$prop2 * $this->$prop3;

            return $result;
        } catch (exception $e) {
            throw $e;
        }
    }
}
