<?php

namespace FacturaScripts\Plugins\Ecuador\Lib;

use FacturaScripts\Dinamic\Model\Impuesto;
use FacturaScripts\Core\App\AppSettings;

class Utils
{


    public static function ChangeDefaultTax()
    {


        $impuesto = new Impuesto();


        foreach ($impuesto->all() as $value) {


            $value->delete();


        }
        $impuesto->codimpuesto = 'IVA12';
        $impuesto->descripcion = 'IVA 12%';
        $impuesto->iva = '12';
        $impuesto->recargo = '0';
        $impuesto->save();
        $impuesto->codimpuesto = 'IVA0';
        $impuesto->descripcion = 'IVA 0%';
        $impuesto->iva = '0';
        $impuesto->recargo = '0';
        $impuesto->save();
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


        $state->idprovincia = 1;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Azuay';
        $state->codisoprov = 'EC-1';
        $state->save();
        $state->idprovincia = 2;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Bolívar';
        $state->codisoprov = 'EC-2';
        $state->save();
        $state->idprovincia = 3;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Cañar';
        $state->codisoprov = 'EC-3';
        $state->save();
        $state->idprovincia = 4;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Carchi';
        $state->codisoprov = 'EC-4';
        $state->save();
        $state->idprovincia = 5;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Chimborazo';
        $state->codisoprov = 'EC-5';
        $state->save();
        $state->idprovincia = 6;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Cotopaxi';
        $state->codisoprov = 'EC-6';
        $state->save();
        $state->idprovincia = 7;
        $state->codisoprov = 'ECU';
        $state->provincia = 'El Oro';
        $state->codisoprov = 'EC-7';
        $state->save();
        $state->idprovincia = 8;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Esmeraldas';
        $state->codisoprov = 'EC-8';
        $state->save();
        $state->idprovincia = 9;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Galápagos';
        $state->codisoprov = 'EC-9';
        $state->save();
        $state->idprovincia = 10;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Guayas';
        $state->codisoprov = 'EC-10';
        $state->save();
        $state->idprovincia = 1;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Imbabura';
        $state->codisoprov = 'EC-11';
        $state->save();
        $state->idprovincia = 12;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Loja';
        $state->codisoprov = 'EC-12';
        $state->save();
        $state->idprovincia = 13;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Los Ríos';
        $state->codisoprov = 'EC-13';
        $state->save();
        $state->idprovincia = 14;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Manabí';
        $state->codisoprov = 'EC-14';
        $state->save();
        $state->idprovincia = 15;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Morona Santiago';
        $state->codisoprov = 'EC-15';
        $state->save();
        $state->idprovincia = 16;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Napo';
        $state->codisoprov = 'EC-16';
        $state->save();
        $state->idprovincia = 17;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Orellana';
        $state->codisoprov = 'EC-17';
        $state->save();
        $state->idprovincia = 18;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Pastaza';
        $state->codisoprov = 'EC-18';
        $state->save();
        $state->idprovincia = 19;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Pichincha';
        $state->codisoprov = 'EC-19';
        $state->save();
        $state->idprovincia = 20;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Santa Elena';
        $state->codisoprov = 'EC-20';
        $state->save();
        $state->idprovincia = 21;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Santo Domingo de los Tsáchilas';
        $state->codisoprov = 'EC-21';
        $state->save();
        $state->idprovincia = 22;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Sucumbíos';
        $state->codisoprov = 'EC-22';
        $state->save();
        $state->idprovincia = 23;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Tungurahua';
        $state->codisoprov = 'EC-23';
        $state->save();
        $state->idprovincia = 24;
        $state->codisoprov = 'ECU';
        $state->provincia = 'Zamora Chinchipe';
        $state->codisoprov = 'EC-24';
        $state->save();

    }
}