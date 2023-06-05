<?php

namespace App\View\Components;

use Illuminate\View\{Component, View};

class GuestLayout extends Component
{
    public function render(): View
    {
        return view('layouts.guest');
    }
}
