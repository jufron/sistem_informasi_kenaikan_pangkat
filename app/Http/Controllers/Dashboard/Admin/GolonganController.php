<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GolonganRequest;
use App\Models\Golongan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GolonganController extends Controller
{
    public function index (): View
    {
        return view('dashboard.admin.golongan.index', [
            'golongan'      => Golongan::latest()->get()
        ]);
    }

    public function create (): View
    {
        return view('dashboard.admin.golongan.tambah');
    }

    public function store (GolonganRequest $request): RedirectResponse
    {
        Golongan::create($request->only('nama'));
        alert()->success('Success','Berhasil dibuat.')->autoClose(5000);
        return redirect()->route('admin.gologan.index');
    }

    public function delete (Golongan $golongan): RedirectResponse
    {
        $golongan->delete();
        alert()->success('Success','Berhasil dihapus.')->autoClose(5000);
        return redirect()->route('admin.gologan.index');
    }
}
