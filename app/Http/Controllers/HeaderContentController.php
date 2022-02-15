<?php

namespace App\Http\Controllers;

use App\Models\HeaderContent;
use Illuminate\Http\Request;

class HeaderContentController extends Controller
{
    public function index()
    {
        $header = HeaderContent::first();

        return view('header-content.index', compact('header'));
    }

    public function update(Request $request, HeaderContent $headerContent)
    {
        $headerContent->update([
            'heading' => $request->heading,
            'video_link' => $request->video_link,
            'desc' => preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $request->desc)
        ]);

        return redirect()->back()->with('success', 'Berhasil mengganti konten header');
    }

}
