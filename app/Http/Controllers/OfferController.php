<?php

namespace App\Http\Controllers;



use App\Mail\AdminMail;
use App\Mail\UserMail;
use App\Models\ClientOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        Mail::to('bayramh2011@gmail.com')->send(new AdminMail($offer));
        Mail::to($offer->email)->send(new UserMail($offer));

        return self::index($request);
    }

    public function modify(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric',
            'status' => 'required|string'
        ]);

        $status_changes = false;
        $offer = ClientOffer::find($request->input('id'));
        if ($request->input('status') !== $offer->status) $status_changes = true;
        $offer->status = $request->input('status');
        $offer->word_count = $request->input('word_count');
        $offer->price = $request->input('price');
        $offer->tariff = $request->input('tariff');

        if ($request->hasFile('template_filepath')) {
            $template_file = $request->file('template_filepath');
            $template_filename = $template_file->getClientOriginalName();
//            mkdir(public_path('files/' . $uuid));
            $template_file->move(public_path("files/$offer->uuid/"), $template_filename);
            $offer->template_filepath = $template_filename;
        }

        if ($request->hasFile('translate_filepath')) {
            $translate_file = $request->file('translate_filepath');
            $translate_filename = $translate_file->getClientOriginalName();
//            mkdir(public_path('files/' . $uuid));
            $translate_file->move(public_path("files/$offer->uuid/"), $translate_filename);
            $offer->translate_filepath = $translate_filename;
        }
        $offer->save();
        if ($status_changes)
            Mail::to($offer->email)->send(new UserMail($offer));

        $offers = ClientOffer::query()->orderByDesc('id')->paginate(20);
        return view('layouts.admin', ['offers' => $offers]);
    }
}
