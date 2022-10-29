@extends('layouts.index')

@section('content')
    <style>
        .services-font {
            font-size: 20px;
            padding-bottom: 10px;
            text-align: justify;
        }
    </style>
    <div class="d-flex justify-content-center col-12">
        <div class="col-6 mt-4 mb-4 block-2 border rounded text-center pt-4 pb-4" style="background: rgba(256, 256, 256, 0.7)">
            <h1>
                {{__("base.contact")}}
            </h1>
            <form action="/send"  method="POST" class="col-12 border rounded mt-2 mb-2">
                @csrf
                <label for="name" class="mt-3">{{__("base.fullname")}}</label>
                <input type="text" id="name" name="name" class="form-control" required>
                <label for="email" class="mt-3">{{__("base.mail")}}</label>
                <input type="email" id="email" name="email" class="form-control" required>
                <label for="message" class="mt-3">{{__("base.message")}}</label>
                <textarea type="text" id="message" name="message" class="form-control" required></textarea>
                <button type="submit" class="btn btn-primary mt-2 mb-2">{{__("base.send")}}</button>
            </form>
            <div class="services-font">
                <b>WhatsApp:</b> +905050181191 <br>
                <b>E-Mail:</b> lingualline1@gmail.com <br>
                <br>
                Hürrüyet Mahallesi, Esin Sokak, 17/1, Kağıthane, İstanbul, Türkiye <br>
            </div>
        </div>
    </div>
@endsection
