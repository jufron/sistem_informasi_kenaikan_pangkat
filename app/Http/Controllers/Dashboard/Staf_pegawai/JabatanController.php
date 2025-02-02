<?php

namespace App\Http\Controllers\Dashboard\Staf_pegawai;

use App\Http\Controllers\Controller;
use App\Http\Requests\JabatanRequest;
use App\Models\Jabatan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JabatanController extends Controller
{
    public function index (): View
    {
        return view('dashboard.staf_pegawai.jabatan.index', [
            'jabatan'   => Jabatan::latest()->get()
        ]);
    }

    public function create (): View
    {
        return view('dashboard.staf_pegawai.jabatan.tambah');
    }

    public function store(JabatanRequest $request): RedirectResponse
    {
        Jabatan::create($request->only('nama'));
        alert()->success('Success','Berhasil dibuat.')->autoClose(5000);
        return redirect()->route('staf_pegawai.jabatan.index');
    }

    public function delete (Jabatan $jabatan): RedirectResponse
    {
        $jabatan->delete();
        alert()->success('Success','Berhasil dihapus.')->autoClose(5000);
        return redirect()->route('staf_pegawai.jabatan.index');
    }
}
