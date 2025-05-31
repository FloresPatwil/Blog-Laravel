<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert2 extends Component
{
    public $class;
    /**
     * Create a new component instance.
     */
    public function __construct($type = 'info')
    {

        switch ($type) {
            case 'info':
                $class = 'text-blue-800 bg-blue-50 dark:bg-blue-400 dark:text-blaue-400';//blue
                break;
            case 'danger':
                $class = 'text-red-800 bg-orange-50 dark:bg-blue-400 dark:text-blaue-400';
                break;
            case 'sucess':
                $class = 'text-black-800 bg-green-50 dark:bg-green-400 dark:text-white-400';
                break;
            case 'warning':
                $class = 'text-yellow-800 bg-yellow-50 dark:bg-blue-400 dark:text-magenta-400';
                break;
            case 'dark':
                $class = 'text-gray-800 bg-gray-50 dark:bg-blue-400 dark:text-orange-400';
                break;    
            default:
                $class = 'blue';
                break;
        }
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
