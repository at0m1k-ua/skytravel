<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Travel;
use Illuminate\Http\Request;

class SaveOrderController extends Controller
{
    public function handle(Request $request)
    {
        $travel = Travel::find($request->travel_id);
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;

        if ($travel && $name && $phone && $email) {
            Order::create([
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'travel_id' => $travel->id,
            ]);
        }

        return redirect('/');
    }
}
