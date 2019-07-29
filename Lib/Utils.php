<?php

namespace  FacturaScripts\Plugins\Ecuador\Lib;

use FacturaScripts\Dinamic\Model\Impuesto;


class Utils {


    public static function ChangeDefaultTax(){

            $impuesto = new Impuesto();
            foreach ($impuesto->all() as $value){

                $value->delete();

            }

    }

}