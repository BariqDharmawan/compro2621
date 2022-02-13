<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePackageValidation;
use App\Http\Requests\UpdatePackageValidation;
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

    public function store(StorePackageValidation $request)
    {
        OurPackage::create($request->validated());

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
    public function update(UpdatePackageValidation $request, OurPackage $ourPackage)
    {
        $ourPackage->update($request->validated());

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
