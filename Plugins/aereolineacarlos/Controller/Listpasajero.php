<?php
namespace FacturaScripts\Plugins\aereolineacarlos\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListPasajero extends ListController {
    public function getPageData(): array
    {
        $page = parent::getPageData();
        $page['title'] = 'Pasajeros';
        $page['menu'] = 'Aereolinea';
        $page['icon'] = 'fas fa-users';
        return $page;
    }

    protected function createViews()
    {
        $this->addView('Listpasajero', 'pasajero');
        

    }

    protected function loadData($viewName, $view) {
        switch ($viewName) {
            case 'Listpasajero':
                $view->loadData();
                break; 
        }
    }
    
    
}