<?php

namespace App\Http\Controllers\Dashboard\Kasubag;

use App\Http\Controllers\Controller;
use App\Http\Requests\DisposisiRequest;
use App\Models\Disposisi;
use App\Models\Pegawai;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class DisposisiController extends Controller
{
    public function index (): View
    {
        return view('dashboard.kasubang.disposisi.index', [
            'disposisi' => Disposisi::latest()->get()
        ]);
    }

    public function create (): View
    {
        return view('dashboard.kasubang.disposisi.tambah', [
            'pegawai'   => Pegawai::select(['id', 'nama_lengkap'])->latest()->get()
        ]);
    }

    public function store (DisposisiRequest $request): RedirectResponse
    {
        $request->validate([
            'disposisi_file'       => ['required']
        ]);
        $fiile_name = $request->file('disposisi_file')->store('disposisi', 'public');
        $request->createData($fiile_name);
        alert()->success('Success','Berhasil dibuat.')->autoClose(5000);
        return redirect()->route('kasubag.disposisi.index');
    }

    public function destroy ($id): RedirectResponse
    {
        $model = Disposisi::findOrFail($id);
        Storage::disk('public')->delete($model->file);
        $model->delete();

        alert()->success('Success','Berhasil Dihapus.')->autoClose(5000);
        return redirect()->route('kasubag.disposisi.index');
    }

    public function download ($id): BinaryFileResponse
    {
        return $this->download_word($id, Disposisi::class, 'disposisi.docx');
    }
}
