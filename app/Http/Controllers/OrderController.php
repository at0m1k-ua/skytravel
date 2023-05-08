<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function show(Request $request): View
    {
        return view('order', ['travels' => Travel::all(), 'id' => $request->id]);
    }
}
