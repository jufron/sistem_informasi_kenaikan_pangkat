<?php

namespace App\Http\Controllers\Dashboard\Kasubag;

use App\Http\Controllers\Controller;
use App\Http\Requests\CatatanUsulRequest;
use App\Models\CatatanUsulan;
use App\Models\Pegawai;
use App\Traits\DownloadWordTrait;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class CatatanUsulanController extends Controller
{
    use DownloadWordTrait;

    public function index (): View
    {
        $catatan_usulan = CatatanUsulan::with([
            'pegawai' => fn (BelongsTo $query) => $query->select(['id', 'nama_lengkap'])
        ])->latest()->get();

        return view('dashboard.kasubang.catatan-usulan.index', [
            'catatan_usulan'    => $catatan_usulan
        ]);
    }

    public function edit ($id): View
    {
        return view('dashboard.kasubang.catatan-usulan.ubah', [
            'catatan_usulan'    => CatatanUsulan::findOrFail($id),
            'pegawai'           => Pegawai::select(['id', 'nama_lengkap'])->latest()->get()
        ]);
    }

    public function update (CatatanUsulRequest $request, $id)
    {
        $data_lama = CatatanUsulan::findOrFail($id);

        $fileName = $data_lama->file;

        if ($request->file('')) {
            if (Storage::disk('public')->exists($data_lama->file)) {
                Storage::disk('public')->delete($data_lama->file);
            }

            $fileName = $request->file('catatan_usulan')->store('note_usulan', 'public');
        }

        $request->updateData($id, $fileName);
        alert()->success('Success','Berhasil Diperbaharui.')->autoClose(5000);
        return redirect()->route('kasubag.catatan-usulan.index');
    }

    public function download ($id): BinaryFileResponse
    {
        return $this->download_word($id, CatatanUsulan::class, 'catatan_usulan.docx');
    }
}
