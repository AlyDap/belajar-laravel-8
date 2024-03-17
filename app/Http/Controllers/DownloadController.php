<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index()
    {
        $downloads = Download::all();
        return view('download', compact('downloads'));
    }

    public function downloadPDF($id)
    {
        $download = Download::findOrFail($id);

        // Path ke file PDF
        $filePath = storage_path('app/public/' . $download->file);

        // Download file PDF
        return response()->download($filePath, $download->name . '.pdf');
    }
}
