<?php

namespace App\Http\Controllers;



use App\Models\ClientOffer;
use Illuminate\Http\Request;

class OfferController
{
    protected $uuid = null;

    public function index(Request $request)
    {
        if (!$this->uuid) {
            if ($request->input('uuid')) {
                $this->uuid = $request->input('uuid');
            } else {
                return redirect()->back();
            }
        }

        $offer = ClientOffer::where('uuid', $this->uuid)->first();
        return view('layouts.offer', ['offer' => $offer]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'fio' => 'required|string',
            'email' => 'required|email',
            'from' => 'required|string',
            'to' => 'required|string',
            'file' => 'required|file'
        ]);

        $uuid = uniqid();

        $fio = $request->input('fio');
        $email = $request->input('email');
        $from = $request->input('from');
        $to = $request->input('to');

        if (!$request->hasFile('file')) return redirect()->back();

        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        mkdir(public_path('files/' . $uuid));
        $file->move(public_path("files/$uuid/"), $filename);

        $offer = ClientOffer::create([
            'uuid' => $uuid,
            'user_name' => $fio,
            'email' => $email,
            'from' => $from,
            'to' => $to,
            'original_filepath' => $filename,
            'status' => 'prepare'
        ]);

        $this->uuid = $uuid;

        return self::index($request);
    }
}
