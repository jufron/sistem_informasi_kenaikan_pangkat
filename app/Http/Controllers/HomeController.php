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
        if (auth()->user()->rolle === 'pimpinan') {
            return redirect()->route('dashboard.pimpinan');
        } else if (auth()->user()->rolle === 'sekertaris') {
            return redirect()->route('dashboard.sekertaris');
        } else if (auth()->user()->rolle === 'kasubag') {
            return redirect()->route('dashboard.kasubag');
        } else if (auth()->user()->rolle === 'staf_pegawai') {
            return redirect()->route('dashboard.staf_pegawai');
        } else if (auth()->user()->rolle === 'pegawai') {
            return redirect()->route('dashboard.pegawai');
        }else {
            abort(403);
        }
    }
}
