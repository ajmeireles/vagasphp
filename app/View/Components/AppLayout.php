<?php

namespace App\View\Components;

use Illuminate\View\{Component, View};

class AppLayout extends Component
{
    public function render(): View
    {
        return view('layouts.app');
    }
}
