<?php namespace Uit\Toastr\Components;

use Cms\Classes\ComponentBase;
use October\Rain\Support\Facades\Block;

class Toastr extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'uit.toastr::lang.plugin.name',
            'description' => 'uit.toastr::lang.plugin.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'messageHeader' => [
                'title' => 'Message header text',
                'default' => "System message",
            ],
            'positionClass' => [
                'title' => 'Toastr alert position',
                'type' => 'dropdown',
                'default' => 'toast-top-right',
                'options' => ['toast-top-right' => 'Top right', 'toast-bottom-right' => 'Top bottom',
                    'toast-bottom-left' => 'Bottom left', 'toast-top-left' => 'Top left',
                    'toast-top-full-width' => 'Top full width', 'toast-bottom-full-width' => 'Bottom full width',
                    'toast-top-center' => 'Top center', 'toast-bottom-center' => 'Bottom center']
            ],
            'closeButton' => [
                'title' => 'Show close button',
                'default' => true,
                'type' => 'checkbox'
            ],
            'debug' => [
                'title' => 'Debug',
                'default' => false,
                'type' => 'checkbox'
            ],
            'newestOnTop' => [
                'title' => 'Newest on top',
                'default' => true,
                'type' => 'checkbox'
            ],
            'progressBar' => [
                'title' => 'Show progressbar',
                'default' => true,
                'type' => 'checkbox'
            ],
            'preventDuplicates' => [
                'title' => 'Prevent duplicates',
                'default' => false,
                'type' => 'checkbox'
            ],
            'showDuration' => [
                'title' => 'Show duration',
                'default' => 300
            ],
            'hideDuration' => [
                'title' => 'Hide duration',
                'default' => 1000
            ],
            'showEasing' => [
                'title' => 'Show easing',
                'type' => 'dropdown',
                'default' => 'swing',
                'options' => ['swing' => 'Swing', 'linear' => 'Linear']
            ],
            'hideEasing' => [
                'title' => 'Hide easing',
                'type' => 'dropdown',
                'default' => 'linear',
                'options' => ['swing' => 'Swing', 'linear' => 'Linear']
            ],
            'timeOut' => [
                'title' => 'Time out',
                'default' => 5000
            ],
            'extendedTimeOut' => [
                'title' => 'Extended time out',
                'default' => 5000
            ],
            'showMethod' => [
                'title' => 'Show method',
                'type' => 'dropdown',
                'default' => 'fadeIn',
                'options' => ['show' => 'Show', 'fadeIn' => 'Fade in', 'slideDown' => 'Slide down']
            ],
            'hideMethod' => [
                'title' => 'Hide method',
                'type' => 'dropdown',
                'default' => 'fadeOut',
                'options' => ['hide' => 'Show', 'fadeOut' => 'Fade out', 'slideUp' => 'Slide up']
            ],
            'handleAjaxErrors' => [
                'title' => 'Handle and show ajax errors',
                'default' => true,
                'type' => 'checkbox'
            ],
            'handleAjaxFlashMessages' => [
                'title' => 'Handle and show ajax messages',
                'default' => true,
                'type' => 'checkbox'
            ],
            'onclick' => [
                'title' => 'Handle click to message',
                'default' => ''
            ],

        ];
    }

    public function onRun()
    {
        $toastr = [
            'positionClass' => $this->property('positionClass'),
            'closeButton' => $this->property('closeButton'),
            'debug' => $this->property('debug'),
            'newestOnTop' => $this->property('newestOnTop'),
            'progressBar' => $this->property('progressBar'),
            'preventDuplicates' => $this->property('preventDuplicates'),
            'showDuration' => $this->property('showDuration'),
            'hideDuration' => $this->property('hideDuration'),
            'showEasing' => $this->property('showEasing'),
            'hideEasing' => $this->property('hideEasing'),
            'timeOut' => $this->property('timeOut'),
            'extendedTimeOut' => $this->property('extendedTimeOut'),
            'showMethod' => $this->property('showMethod'),
            'hideMethod' => $this->property('hideMethod'),
            'handleAjaxErrors' => $this->property('handleAjaxErrors'),
            'handleAjaxFlashMessages' => $this->property('handleAjaxFlashMessages'),
            'onclick' => $this->property('onclick'),
            'messageHeader' => $this->property('messageHeader'),
        ];
        $this->addCss('/plugins/uit/toastr/assets/css/toastr.css');
        $this->addJs('/plugins/uit/toastr/assets/js/toastr.js');
        Block::put('scripts');
        echo '<script>';
        echo $this->renderPartial('Toastr::js.htm', compact('toastr'));
        echo '</script>';
        Block::endPut();
    }


}
