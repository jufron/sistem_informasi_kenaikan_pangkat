<?php

namespace App\Http\Controllers\Dashboard\Pimpinan;

use App\Http\Controllers\Controller;
use App\Http\Requests\DisposisiRequest;
use App\Models\Disposisi;
use App\Models\Pegawai;
use App\Traits\DownloadWordTrait;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class DisposisiController extends Controller
{
    use DownloadWordTrait;

    public function index (): View
    {
        return view('dashboard.pimpinan.disposisi.index', [
            'disposisi' => Disposisi::with([
                'pegawai' => fn (BelongsTo $query) => $query->select(['id', 'nama_lengkap'])
            ])->latest()->get()
        ]);
    }

    public function edit ($id): View
    {
        return view('dashboard.pimpinan.disposisi.ubah', [
            'disposisi'     => Disposisi::findOrFail($id),
            'pegawai'       => Pegawai::select(['id', 'nama_lengkap'])->latest()->get()
        ]);
    }

    public function update (DisposisiRequest $request, $id): RedirectResponse
    {
        $data_lama = Disposisi::findOrFail($id);

        $fileName = $data_lama->file;

        if ($request->file('disposisi_file')) {
            if (Storage::disk('public')->exists($data_lama->file)) {
                Storage::disk('public')->delete($data_lama->file);
            }

            $fileName = $request->file('disposisi_file')->store('disposisi', 'public');
        }

        $request->updateData($id, $fileName);
        alert()->success('Success','Berhasil Diperbaharui.')->autoClose(5000);
        return redirect()->route('pimpinan.disposisi.index');
    }

    // disposisicontroller
    public function download ($id): BinaryFileResponse
    {
        return $this->download_word($id, Disposisi::class, 'disposisi.docx');
    }
}
