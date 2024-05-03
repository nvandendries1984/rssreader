<?php namespace NielsVanDenDries\Rssreader\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class RssSources extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = [
        'manager' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('NielsVanDenDries.Rssreader', 'main-menu-item-rssreader');
    }

}
