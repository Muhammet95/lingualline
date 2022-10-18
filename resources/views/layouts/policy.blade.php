@extends('layouts.index')

@section('content')
    <style>
        .policy-font {
            font-size: 20px;
            padding-bottom: 10px;
            text-align: justify;
        }
    </style>
    <div class="col-12 mt-4 mb-4 block-2 border rounded text-center pt-4 pb-4" style="background: rgba(256, 256, 256, 0.7)">
        <div class="policy-font">
            <ul>
                <li>
                    <span class="font-italic">lingualline</span> {{__("base.policy_text1")}}
                </li>
                <li>
                    {{__("base.policy_text2")}} <span class="font-italic">lingualline</span> {{__("base.policy_text3")}}
                </li>
                <li>
                    <span class="font-italic">lingualline</span> {{__("base.policy_text4")}}
                </li>
                <li>
                    {{__("base.policy_text5")}}
                </li>
                <li>
                    <span class="font-italic">lingualline</span> {{__("base.policy_text6")}}
                </li>
                <li>
                    {{__("base.policy_text7")}}
                </li>
                <li>
                    {{__("base.policy_text8")}}
                </li>
                <li>
                    <span class="font-italic">lingualline</span> {{__("base.policy_text9")}}
                </li>
            </ul>
        </div>
    </div>
@endsection
