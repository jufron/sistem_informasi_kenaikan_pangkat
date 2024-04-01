<?php

namespace App\Http\Controllers\Dashboard\Pegawai;

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
        return view('dashboard.pegawai.sk-kenaikan-pangkat.index', [
            'sk_kenaikan_pangkat'   => SkKenaikanPangkat::latest()->get()
        ]);
    }

    public function download ($id)
    {
        return $this->download_word($id, SkKenaikanPangkat::class, 'sk_keanikan_pangkat.docx');
    }
}
