<?php
namespace FacturaScripts\Plugins\aereolineacarlos\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListBillete extends ListController {
    public function getPageData(): array
    {
        $page = parent::getPageData();
        $page['title'] = 'Billetes';
        $page['menu'] = 'Aereolinea';
        $page['icon'] = 'fas fa-money-check-alt';
        return $page;
    }

    protected function createViews()
    {
        $this->addView('Listbillete', 'billete');
        

    }

    protected function loadData($viewName, $view) {
        switch ($viewName) {
            case 'Listbillete':
                $view->loadData();
                break; 
        }
    }
    
    
}