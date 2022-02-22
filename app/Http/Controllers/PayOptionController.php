<?php

namespace App\Http\Controllers;

use App\Models\PayOption;
use Illuminate\Http\Request;

class PayOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payOptions = PayOption::all();

        return view('pay-option.index', compact('payOptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pay-option.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->file('img');
        $imgPath = $img->store('public/pay-option');

        PayOption::create([
            'name' => $request->name,
            'img' => str_replace('public/pay-option', '', $imgPath)
        ]);

        return redirect()->route('pay-option.index')->with('success', 'Berhasil menambah metode ' . $request->name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PayOption  $payOption
     * @return \Illuminate\Http\Response
     */
    public function edit(PayOption $payOption)
    {
        return view('pay-option.edit', compact('payOption'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PayOption  $payOption
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PayOption $payOption)
    {
        $payOption->name = $request->name;

        if ($request->hasFile('img')) {
            $img = $request->file('avatar');
            $imgPath = $img->store('public/pay-option');

            $payOption->img = $imgPath;
        }

        $payOption->save();

        return redirect()->route('pay-option.index')->with('success', 'Berhasil mengubah metode ' . $request->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PayOption  $payOption
     * @return \Illuminate\Http\Response
     */
    public function destroy(PayOption $payOption)
    {
        $payOption->delete();

        return redirect()->back()->with('success', 'berhasil menghapus metode');
    }
}
