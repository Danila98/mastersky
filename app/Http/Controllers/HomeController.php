<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function profile()
    {
        return view('profile');
    }
    public function update(Request $request)
    {
        if($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('uploads', 'public');
            $file = new \App\Image();
            if(\App\Image::where('user', '=', auth()->user()->id)){
                $oldImg = \App\Image::where('user', '=', auth()->user()->id)->delete();
            }
            $file->url = $path;
            $file->user = auth()->user()->id;
            $file-> save();
        }
        auth()->user()->name                = request('name');
        auth()->user()->firstname           = request('firstname');
        auth()->user()->patronymic          = request('patronymic');
        auth()->user()->dateOfBirth         = request('dateOfBirth');
        auth()->user()->town                = request('town');
        auth()->user()->description         = request('description');
        auth()->user()->avatar              = $path;

        auth()->user()->save();

        
        return view('profile');
    }
    public function myArticles()
    {
        return view('myArticles');
    }
    public function favorites()
    {
        return view('favorites');
    }
}
