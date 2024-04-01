<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

trait DownloadWordTrait
{
    public function download_word ($id, $modelClass, $fileName): BinaryFileResponse
    {
        $model = $modelClass::findOrFail($id);
        $filePath = Storage::disk('public')->path($model->file);

        return response()->download($filePath, $fileName, [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        ]);
    }
}
