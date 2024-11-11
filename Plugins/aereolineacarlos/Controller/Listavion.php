<?php
namespace FacturaScripts\Plugins\aereolineacarlos\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListAvion extends ListController {
    public function getPageData(): array
    {
        $page = parent::getPageData();
        $page['title'] = 'Aviones';
        $page['menu'] = 'Aereolinea';
        $page['icon'] = 'fas fa-plane';
        return $page;
    }

    protected function createViews()
    {
        $this->addView('Listavion', 'avion');
        

    }

    protected function loadData($viewName, $view) {
        switch ($viewName) {
            case 'Listavion':
                $view->loadData();
                break; 
        }
    }
}