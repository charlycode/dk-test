<?php

namespace App\Http\Controllers;

class FrontController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome(\Illuminate\Http\Request $request)
    {
        $visit = \App\Visit::firstOrCreate([
            'url'   => $request->fullUrl(),
        ]);
        $visit->count++;
        $visit->save();

        return view('welcome', compact('visit'));
    }
}
