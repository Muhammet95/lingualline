<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\AdminMessage;
use App\Models\ClientOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function contact()
    {
        return view('layouts.contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        $data = $request->all();

        Mail::to('lingualline1@gmail.com')->send(new AdminMessage($data));
        return redirect()->back();
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
        $offers = ClientOffer::query()
            ->where('status', 'block')
            ->orderByDesc('id')
            ->paginate(20);
        return view('layouts.admin', ['offers' => $offers]);
    }
}
