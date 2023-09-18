<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->rolle === 'super_admin') {
            return redirect()->route('dashboard.admin');
        } else if (auth()->user()->rolle === 'sekertaris') {
            return redirect()->route('dashboard.sekertaris');
        } else if (auth()->user()->rolle === 'kasubang') {
            return redirect()->route('dashboard.kasubang');
        } else {
            abort(403);
        }
    }
}
