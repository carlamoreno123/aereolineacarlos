<?php
namespace FacturaScripts\Plugins\aereolineacarlos\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class  ListVuelo extends ListController
{
    public function getPageData(): array
    {
        $page = parent::getPageData();
        $page['title'] = 'Vuelos';
        $page['menu'] = 'Aereolinea';
        $page['icon'] = 'fas fa-search';
        return $page;
    }

    protected function createViews()
    {
        // creamos cada pestaña en una función separada, por comodidad
        $this->addView('Listvuelo', 'vuelo');
    }
    
    protected function loadData($viewName, $view) {
        switch ($viewName) {
            case 'Listvuelo':
                $view->loadData();
                break; 
        }
    }
}