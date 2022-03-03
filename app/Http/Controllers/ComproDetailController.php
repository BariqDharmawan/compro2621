<?php

namespace App\Http\Controllers;

use App\Models\ComproDetail;
use Illuminate\Http\Request;

class ComproDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('compro.index', ['compro' => ComproDetail::first()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ComproDetail  $comproDetail
     * @return \Illuminate\Http\Response
     */
    public function show(ComproDetail $comproDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ComproDetail  $comproDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ComproDetail $comproDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ComproDetail  $comproDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComproDetail $compro)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'summary' => ['required', 'string', 'min:10'],
            'logo' => ['nullable', 'image', 'max:3000'],
        ]);

        $compro->name = $request->name;
        $compro->summary = $request->summary;

        if ($request->hasFile('logo')) {
            $img = $request->file('logo');
            $imgPath = $img->store('public/compro');

            $compro->logo = str_replace('public/compro', '', $imgPath);
        }

        $compro->save();
        // dd($compro);

        return redirect()->back()->with('success', 'Berhasil mengubah detail compro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ComproDetail  $comproDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComproDetail $comproDetail)
    {
        //
    }
}
