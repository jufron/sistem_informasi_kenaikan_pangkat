<?php

namespace App\Http\Controllers\Dashboard\Pimpinan;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkKenaikanPangkatRequest;
use App\Models\Pegawai;
use App\Models\SkKenaikanPangkat;
use App\Traits\DownloadWordTrait;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class SkKenaikanPangkatController extends Controller
{
    use DownloadWordTrait;

    public function index (): View
    {
        // SkKenaikanPangkat::select([
        //     'pegawai'   => fn (BelongsTo $query) => $query->select(['id', 'nama_lengkap'])
        // ])->latest()->get();
        return view('dashboard.pimpinan.sk-kenaikan-pangkat.index', [
            'sk_kenaikan_pangkat'   => SkKenaikanPangkat::latest()->get()
        ]);
    }

    public function create (): View
    {
        return view('dashboard.pimpinan.sk-kenaikan-pangkat.tambah', [
            'pegawai'   => Pegawai::select(['id', 'nama_lengkap'])->latest()->get()
        ]);
    }

    public function store (SkKenaikanPangkatRequest $request): RedirectResponse
    {
        $request->validate([
            'sk_kenaikan_pangkat_file'  => ['required']
        ]);
        $fiile_name = $request->file('sk_kenaikan_pangkat_file')->store('sk_pangkat', 'public');
        $request->createData($fiile_name);
        alert()->success('Success','Berhasil dibuat.')->autoClose(5000);
        return redirect()->route('pimpinan.sk-kenaikan-pangkat.index');
    }

    public function edit ($id)
    {
        return view('dashboard.pimpinan.sk-kenaikan-pangkat.ubah', [
            'pegawai'               => Pegawai::select(['id', 'nama_lengkap'])->latest()->get(),
            'sk_kenaikan_pangkat'   => SkKenaikanPangkat::findorfail($id)
        ]);
    }

    public function update (SkKenaikanPangkatRequest $request, $id): RedirectResponse
    {
        $data_lama = SkKenaikanPangkat::findOrFail($id);

        $fileName = $data_lama->file;

        if ($request->file('disposisi_file')) {
            if (Storage::disk('public')->exists($data_lama->file)) {
                Storage::disk('public')->delete($data_lama->file);
            }

            $fileName = $request->file('disposisi_file')->store('disposisi', 'public');
        }

        $request->updateData($id, $fileName);

        alert()->success('Success','Berhasil Diperbaharui.')->autoClose(5000);
        return redirect()->route('pimpinan.sk-kenaikan-pangkat.index');
    }

    public function destroy ($id)
    {
        $model = SkKenaikanPangkat::findOrFail($id);
        Storage::disk('public')->delete($model->file);
        $model->delete();

        alert()->success('Success','Berhasil Dihapus.')->autoClose(5000);
        return redirect()->route('pimpinan.sk-kenaikan-pangkat.index');
    }

    public function download ($id)
    {
        return $this->download_word($id, SkKenaikanPangkat::class, 'sk_keanikan_pangkat.docx');
    }
}
