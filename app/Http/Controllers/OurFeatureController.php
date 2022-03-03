<?php

namespace App\Http\Controllers;

use App\Models\ComproDetail;
use App\Models\OurFeature;
use Illuminate\Http\Request;

class OurFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = OurFeature::all();
        return view('our-feature.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('our-feature.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'img' => ['required', 'image'],
            'title' => ['required', 'string', 'min:3'],
            'desc' => ['required', 'string', 'min:5']
        ]);

        $img = $request->file('img');
        $imgPath = $img->store('public/feature');

        OurFeature::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'img' => str_replace('public/feature', '', $imgPath)
        ]);

        return redirect()->route('our-feature.index')->with('success', 'Berhasil menambah fitur baru');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OurFeature  $ourFeature
     * @return \Illuminate\Http\Response
     */
    public function edit(OurFeature $ourFeature)
    {
        return view('our-feature.edit', compact('ourFeature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OurFeature  $ourFeature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OurFeature $ourFeature)
    {
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $imgPath = $img->store('public/feature');

            $ourFeature->img = str_replace('public/feature', '', $imgPath);
        }

        $ourFeature->title = $request->title;
        $ourFeature->desc = $request->desc;
        $ourFeature->save();

        return redirect()->route('our-feature.index')->with('success', 'Berhasil mengubah fitur ' . $ourFeature->title);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OurFeature  $ourFeature
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurFeature $ourFeature)
    {
        $name = $ourFeature->title;
        $ourFeature->delete();

        return redirect()->route('our-feature.index')->with('success', 'Berhasil menghapus fitur ' . $name);
    }
}
