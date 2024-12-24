<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeaderSectionPage extends Component
{
    public $title;
    public $breadcrumbHome;
    public $breadcrumbCurrent;

    /**
     * Create a new component instance.
     *
     * @param string $title
     * @param string $breadcrumbHome
     * @param string $breadcrumbCurrent
     */
    public function __construct($title, $breadcrumbHome, $breadcrumbCurrent)
    {
        $this->title = $title;
        $this->breadcrumbHome = $breadcrumbHome;
        $this->breadcrumbCurrent = $breadcrumbCurrent;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header-section-page');
    }
}
