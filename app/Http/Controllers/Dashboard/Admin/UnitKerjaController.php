<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UnitKerjaRequest;
use App\Models\UnitKerja;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UnitKerjaController extends Controller
{
    public function index (): View
    {
        return view('dashboard.admin.unit-kerja.index', [
            'unit_kerja'    => UnitKerja::latest()->get()
        ]);
    }

    public function create (): View
    {
        return view('dashboard.admin.unit-kerja.tambah');
    }

    public function store (UnitKerjaRequest $request): RedirectResponse
    {
        UnitKerja::create($request->only('nama'));
        alert()->success('Success','Berhasil dibuat.')->autoClose(5000);
        return redirect()->route('admin.unit-kerja.store');
    }

    public function delete (UnitKerja $unitKerja): RedirectResponse
    {
        $unitKerja->delete();
        alert()->success('Success','Berhasil dihapus.')->autoClose(5000);
        return redirect()->route('admin.unit-kerja.store');
    }
}
