<?php namespace Uit\Toastr;


use Backend;
use System\Classes\PluginBase;

/**
 * toastr Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Toastr',
            'description' => 'uit.toastr::lang.plugin.description',
            'author'      => 'uit',
            'icon'        => 'icon-bell'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {      
        return [
            'Uit\Toastr\Components\Toastr' => 'Toastr',
        ];
    }

 

}
