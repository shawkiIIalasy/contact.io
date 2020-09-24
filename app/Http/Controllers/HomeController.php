<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Support\Renderable|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function index()
    {
        return view('landingPages.index');
    }
}
