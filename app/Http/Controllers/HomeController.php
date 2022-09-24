<?php

namespace App\Http\Controllers;

use App\Models\ClientOffer;
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
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function main()
    {
        return view('layouts.main');
    }

    public function about()
    {
        return view('layouts.about');
    }

    public function why()
    {
        return view('layouts.why');
    }

    public function services()
    {
        return view('layouts.services');
    }

    public function policy()
    {
        return view('layouts.policy');
    }

    public function admin()
    {
        $offers = ClientOffer::paginate(20);
        return view('layouts.admin', ['offers' => $offers]);
    }
}
