<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class LamanController extends Controller
{
    public function tentang(): Factory|View|Application
    {
        return view('tampilan.laman.tentang');
    }
}
