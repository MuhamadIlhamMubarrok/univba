<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeaderSection extends Component
{
    public $subtext;
    public $subtextColor;
    public $title;
    public $titleColor;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($subtext, $subtextColor = '#6b7280', $title, $titleColor = '#1f2937')
    {
        $this->subtext = $subtext;
        $this->subtextColor = $subtextColor;
        $this->title = $title;
        $this->titleColor = $titleColor;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header-section');
    }
}
