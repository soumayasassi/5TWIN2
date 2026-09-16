<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvisorController extends Controller
{
    public function show(Request $request )
    {
        $age = $request->get('age');
        $interet = $request->get('interet');
        #return view('advisor', ['age' => $age, 'interet' => $interet]);
        return view('advisor', compact('age', 'interet'));
    }
}
