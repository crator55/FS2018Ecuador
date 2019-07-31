<?php

namespace FacturaScripts\Plugins\Ecuador;

use FacturaScripts\Core\Base\InitClass;

class Init extends InitClass
{

    public function init()
    {
        /// código a ejecutar cada vez que carga FacturaScripts (si este plugin está activado).
    }

    public function update()
    {
        Lib\Utils::ChangeDefaultTax();
        Lib\Utils::ChangeState();
        Lib\Utils::ChangeIdentifer();
    }
}