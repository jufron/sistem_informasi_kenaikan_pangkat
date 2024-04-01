<?php

namespace App\Http\Controllers\Dashboard\Staf_pegawai;

use App\Http\Controllers\Controller;
use App\Http\Requests\CatatanUsulRequest;
use App\Models\CatatanUsulan;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class CatatanUsulanController extends Controller
{
    public function index (): View
    {
        $catatan_usulan = CatatanUsulan::with([
            'pegawai' => fn (BelongsTo $query) => $query->select(['id', 'nama_lengkap'])
        ])->latest()->get();

        return view('dashboard.staf_pegawai.catatan_usulan.index', [
            'catatan_usulan'    => $catatan_usulan
        ]);
    }

    public function create (): View
    {
        return view('dashboard.staf_pegawai.catatan_usulan.tambah', [
            'pegawai'   => Pegawai::select(['id', 'nama_lengkap'])->latest()->get()
        ]);
    }

    public function store (CatatanUsulRequest $request): RedirectResponse
    {
        $request->validate([
            'catatan_usulan_file'   => ['required']
        ]);
        $fiile_name = $request->file('catatan_usulan_file')->store('note_usulan', 'public');
        $request->createData($fiile_name);
        alert()->success('Success','Berhasil dibuat.')->autoClose(5000);
        return redirect()->route('staf_pegawai.catatan-usulan.index');
    }

    public function destroy ($id): RedirectResponse
    {
        $model = CatatanUsulan::findOrFail($id);
        Storage::disk('public')->delete($model->file);
        $model->delete();

        alert()->success('Success','Berhasil dihapus.')->autoClose(5000);
        return redirect()->route('staf_pegawai.catatan-usulan.index');
    }

    public function download ($id): BinaryFileResponse
    {
        return $this->download_word($id, CatatanUsulan::class, 'catatan_usulan.docx');
    }
}

