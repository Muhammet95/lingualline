@extends('base')

@section('index')
    <style>
        .block-1, .block-2, .block-3 {
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
            border-color: rgba(0, 0, 0, 0.5);
        }
        .block-1 {
            height: 200px;
        }
        .uploadLabel {
            /*width: 200px;*/
            background: #0a53be;
            border-radius: 10px;
            color: white;
            padding: 10px;
            cursor: pointer;
            transition-property: opacity;
            transition-duration: 0.3s;
        }
        .uploadLabel:hover {
            opacity: 0.8;
        }
    </style>

    <main class="container-fluid d-flex flex-wrap pt-2 pb-2 justify-content-between">
{{--        <div class="col-12 d-flex justify-content-between flex-wrap p-0 mt-2 mb-2 block-1 border rounded"--}}
{{--             style="background: rgba(256, 256, 256, 0.7); overflow: hidden;">--}}
{{--            @include('layouts.flags')--}}
{{--        </div>--}}
        @yield('content')
        <div class="col-12 text-center text-black border rounded block-3"
             style="background: rgba(256, 256, 256, 0.7); border-radius: 10px;">
            <h1 style="font-weight: bold; font-style: italic; font-family: Apple">{{__("base.slogan")}}</h1>
        </div>
        <div class="col-12 text-center text-black border rounded block-3 mt-2"
             style="background: rgba(256, 256, 256, 0.7); border-radius: 10px;">
            <img src="{{url('assets/img/Process Lingulline-3.png')}}" alt="" style="width: 100%; aspect-ratio: 3/1;">
        </div>

    </main>
@endsection
