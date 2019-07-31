<?php

namespace FacturaScripts\Plugins\Ecuador;

use FacturaScripts\Core\App\AppSettings;
use FacturaScripts\Core\Base\InitClass;
use FacturaScripts\Core\Base\MiniLog;

class Init extends InitClass
{

    public function init()
    {
        /// código a ejecutar cada vez que carga FacturaScripts (si este plugin está activado).
    }

    public function update()
    {
        $codpais = AppSettings::get('default', 'codpais');
        if ($codpais == 'ECU') {
            Lib\Utils::ChangeDefaultTax();
            Lib\Utils::ChangeState();
            Lib\Utils::ChangeIdentifer();
        }else{
            $newminilog = new MiniLog();
            $newminilog->alert("You must change the country from default settings", $context = []);
        }
    }
}