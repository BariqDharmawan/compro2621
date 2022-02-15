<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Http\Request;

class TestimonyController extends Controller
{

    public function index()
    {
        $testimonies = Testimony::all();

        return view('testimony.index', compact('testimonies'));
    }

    public function create()
    {
        return view('testimony.create', compact('testimonies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => ['required', 'string', 'min:3', 'max:100'],
            'review_at' => ['required']
        ]);

        Testimony::create([
            'fullname' => $request->fullname,
            'review_at' => $request->review_at
        ]);

        return redirect()->route('testimony.index')->with('success', 'Berhasil menambah testimony');
    }

    public function edit(Testimony $testimony)
    {
        return view('testimony.edit', compact('testimony'));
    }

    public function update(Request $request, Testimony $testimony)
    {
        $testimony->update([
            'fullname' => $request->fullname,
            'desc' => $request->desc,
            'review_at' => $request->review_at
        ]);

        return redirect()->route('testimony.index')->with('success', 'Berhasil mengubah testimony ' . $testimony->fullname);
    }

    public function destroy(Testimony $testimony)
    {
        $testimony->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus testimony');
    }
}
