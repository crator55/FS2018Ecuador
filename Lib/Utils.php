<?php

namespace FacturaScripts\Plugins\Ecuador\Lib;


use FacturaScripts\Dinamic\Model\Impuesto;
use FacturaScripts\Dinamic\Model\Provincia;
use FacturaScripts\Dinamic\Lib\Import\CSVImport;
use FacturaScripts\Core\Base\DataBase;
use FacturaScripts\Core\App\AppSettings;
Use FacturaScripts\Dinamic\Model\IdentificadorFiscal;


class Utils
{

    public static function ChangeDefaultTax()
    {

            $impuesto = new Impuesto();
            $setting_model = new AppSettings();
            $setting_model->set('default', 'codimpuesto', 'NONE');

            foreach ($impuesto->all() as $value) {
                $value->delete();
            }

            $database = new DataBase();
            $sql = CSVImport::importTableSQL('impuestos');
            if ($database->exec($sql)) {
                $setting_model->set('default', 'codimpuesto', 'IVA12');
                $setting_model->save();
            }


    }

    public static function ChangeIdentifer()
    {
           $identifer = new IdentificadorFiscal();
            foreach ($identifer->all() as $value) {
                $value->delete();
            }
            $identifer->tipoidfiscal = 'CI';
            $identifer->save();

            $identifer->tipoidfiscal = 'RUC';
            $identifer->save();

            $identifer->tipoidfiscal = 'Pasaporte';
            $identifer->save();

    }

    public static function ChangeState()

    {
            $state = new Provincia();
            foreach ($state->all() as $value) {
                $value->delete();
            }
            $database = new DataBase();
            $sql = CSVImport::importTableSQL('provincias');
            $database->exec($sql);

    }
}