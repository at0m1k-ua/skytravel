<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TravelController extends Controller
{
    public function showAll(): View
    {
        return view('travels', ['travels' => Travel::all()]);
    }

    public function show(Request $request): View
    {
        return view('travel', ['travel' => Travel::find($request->id)]);
    }
}
