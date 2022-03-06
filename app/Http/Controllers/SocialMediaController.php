<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('socials.index', ['socials' => SocialMedia::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $platforms = SocialMedia::PLATFORM;

        return view('socials.create', compact('platforms'));
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
            'platform' => ['required', 'unique:social_media', Rule::in(SocialMedia::PLATFORM)],
            'icon' => ['required', 'image'],
            'username' => ['required', 'string', 'min:3'],
            'link' => ['required', 'url'],
        ]);

        if ($request->hasFile('icon')) {
            $img = $request->file('icon');
            $imgPath = $img->store('public/socials');
        }

        SocialMedia::create([
            'platform' => $request->platform,
            'icon' => str_replace('public/socials', '', $imgPath),
            'link' => $request->link,
            'username' => $request->username
        ]);

        return redirect()->route('socials.index')->with('success', 'Berhasil menambah social media');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialMedia $social)
    {
        $platforms = SocialMedia::PLATFORM;

        return view('socials.edit', compact('social', 'platforms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialMedia $social)
    {
        $social->username = $request->username;
        $social->link = $request->link;

        if ($request->hasFile('icon')) {
            $img = $request->file('icon');
            $imgPath = $img->store('public/socials');

            $social->icon = str_replace('public/socials', '', $imgPath);
        }

        $social->save();

        return redirect()->route('socials.index')->with('success', 'Berhasil menghapus social media');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialMedia $social)
    {
        $social->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus social media');
    }
}
