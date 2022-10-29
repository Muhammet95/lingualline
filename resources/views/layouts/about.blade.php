@extends('layouts.index')

@section('content')
    <style>
        .about-font {
            font-size: 20px;
            padding-bottom: 10px;
            text-align: justify;
        }
    </style>
    <div class="col-12 mt-4 mb-4 block-2 border rounded text-center pt-4 pb-4" style="background: rgba(256, 256, 256, 0.7)">
        <div class="about-font">
            {!! __("base.about_text") !!}
        </div>
    </div>
@endsection
