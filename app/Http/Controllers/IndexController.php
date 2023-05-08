<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class IndexController extends Controller
{
    public function show(): View {
        return view('index');
    }
}
