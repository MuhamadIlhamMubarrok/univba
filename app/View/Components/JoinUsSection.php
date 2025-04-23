<?php

namespace App\View\Components;

use Illuminate\View\Component;

class JoinUsSection extends Component
{
    public $title;
    public $description;
    public $buttonText;

    public function __construct($title, $description, $buttonText)
    {
        $this->title = $title;
        $this->description = $description;
        $this->buttonText = $buttonText;
    }

    public function render()
    {
        return view('components.join-us-section');
    }
}
