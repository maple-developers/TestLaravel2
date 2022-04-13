<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileUpload_controller extends Controller
{
    public function index()
    {
        return view('fileUploader');
    }

    public function store(Request $request)
    {
        $fileName = time() . '.' . $request->file->extension();
        print_r(file_get_contents($request->file->getRealPath()));
        /* $request->file->move(public_path('uploads'), $fileName);
        return back()->with('success', 'You have successfully upload file.'); */
    }
}
