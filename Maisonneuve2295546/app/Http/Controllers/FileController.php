<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function showUploadForm()
    {
        return view('fichier.upload');
    }

    public function upload(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'file' => 'required|mimes:pdf,zip,doc|max:2048',
        ]);

        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $file->storeAs('public/files', $filename);

        // Enregistrez les détails du fichier dans votre base de données si nécessaire

        return redirect()->back()->with('success', 'Fichier uploadé avec succès.');
    }
}
