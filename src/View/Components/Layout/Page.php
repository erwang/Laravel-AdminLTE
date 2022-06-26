<?php

namespace JeroenNoten\LaravelAdminLte\View\Components\Layout;

use Illuminate\View\Component;

class Page extends Component
{

    public $title;
    public $header;

    /**
     * Page constructor.
     * @param $title
     * @param $header
     */
    public function __construct($title=null, $header=null)
    {
        $this->title = $title;
        $this->header = $header;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('adminlte::components.layout.page');
    }
}
