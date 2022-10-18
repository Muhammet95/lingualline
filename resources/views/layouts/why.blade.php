@extends('layouts.index')

@section('content')
    <style>
        .why-font {
            font-size: 20px;
            padding-bottom: 10px;
            text-align: justify;
        }
    </style>
    <div class="col-12 mt-4 mb-4 block-2 border rounded text-center pt-4 pb-4" style="background: rgba(256, 256, 256, 0.7)">
        <div class="why-font">
            <span class="font-italic">lingualline</span> {{__("base.why_text1")}}
            <ul>
                <li>{{__("base.why_text2")}}</li>
                <li>{{__("base.why_text3")}}</li>
                <li>{{__("base.why_text4")}}</li>
                <li>{{__("base.why_text5")}}</li>
            </ul>
            {{__("base.why_text6")}}
        </div>
    </div>
@endsection
