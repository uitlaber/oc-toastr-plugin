<?php namespace Uit\Toastr\Components;

use Cms\Classes\ComponentBase;

class Toastr extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'uit.toastr::lang.plugin.name',
            'description' => 'uit.toastr::lang.plugin.description'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun(){
        $this->addCss('/plugins/uit/toastr/assets/css/toastr.css');
        $this->addJs('/plugins/uit/toastr/assets/js/toastr.js');
        $this->addJs('/plugins/uit/toastr/assets/js/handler.js');
    }

}