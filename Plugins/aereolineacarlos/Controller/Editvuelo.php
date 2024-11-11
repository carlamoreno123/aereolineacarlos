<?php
namespace FacturaScripts\Plugins\aereolineacarlos\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditVuelo extends EditController
{
    public function getModelClassName(): string
    {
        return 'Vuelo';
    }
}