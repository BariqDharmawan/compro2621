<?php

namespace App\Http\Controllers;

use App\Models\OurPackage;
use Illuminate\Http\Request;

class OurPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = OurPackage::all();
        return view('package.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('package.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        OurPackage::create([
            'title' => $request->title,
            'old_price' => $request->old_price ?? null,
            'new_price' => $request->new_price,
            'content' => $request->content
        ]);

        return redirect()->route('our-package.index')->with('success', 'Berhasil menambah package baru');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OurPackage  $ourPackage
     * @return \Illuminate\Http\Response
     */
    public function edit(OurPackage $ourPackage)
    {
        return view('package.edit', compact('ourPackage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OurPackage  $ourPackage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OurPackage $ourPackage)
    {
        $ourPackage->update([
            'title' => $request->title,
            'old_price' => $request->old_price ?? null,
            'new_price' => $request->new_price,
            'content' => $request->content
        ]);

        return redirect()->route('our-package.index')->with('success', 'Berhasil menambah package baru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OurPackage  $ourPackage
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurPackage $ourPackage)
    {
        $ourPackage->delete();

        return redirect()->back()->with('success', 'Berhasil menambah package baru');
    }
}
