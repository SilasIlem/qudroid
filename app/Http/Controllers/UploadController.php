<?php

namespace App\Http\Controllers;

use App\Models\TemporaryFile;
use App\Models\TemporaryFileController;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $filename = $file->getClientOriginalName();
            $foldername = uniqid() . "-" . now()->timestamp;
            $file->storeAs('avatars/tmp/' . $foldername, $filename);

            TemporaryFile::create([
                'folder_name' => $foldername,
                'file_name' => $filename
            ]);

            return $foldername;
        }

        return '';
    }
}
