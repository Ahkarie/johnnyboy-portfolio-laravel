<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PortfolioController
{
    public function index(): View
    {
        return view('pages.home');
    }
}