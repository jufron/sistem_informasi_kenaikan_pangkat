<?php

namespace App\Http\Controllers\Dashboard\Staf_pegawai;

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
        return view('dashboard.staf_pegawai.unit-kerja.index', [
            'unit_kerja'    => UnitKerja::latest()->get()
        ]);
    }

    public function create (): View
    {
        return view('dashboard.staf_pegawai.unit-kerja.tambah');
    }

    public function store (UnitKerjaRequest $request): RedirectResponse
    {
        UnitKerja::create($request->only('nama'));
        alert()->success('Success','Berhasil dibuat.')->autoClose(5000);
        return redirect()->route('staf_pegawai.unit-kerja.index');
    }

    public function delete (UnitKerja $unitKerja): RedirectResponse
    {
        $unitKerja->delete();
        alert()->success('Success','Berhasil dihapus.')->autoClose(5000);
        return redirect()->route('staf_pegawai.unit-kerja.index');
    }
}
