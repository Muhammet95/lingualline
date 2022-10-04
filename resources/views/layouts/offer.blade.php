@extends('layouts.index')

@section('content')
    <div class="col-12 mt-2 mb-2  block-3 border rounded text-center p-0 card" style="background: rgba(256, 256, 256, 0.7)">
        <div class="card-header">
            <strong style="font-size: 20px;font-weight: bold;">Offer</strong>
        </div>
        <div class="card-body">
            <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                <strong>Name: </strong>&nbsp;&nbsp; <span>{{$offer->user_name}}</span>
            </div>
            <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                <strong>Email: </strong>&nbsp;&nbsp; <span>{{$offer->email}}</span>
            </div>
            <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                <strong>Password: </strong>&nbsp;&nbsp; <span>{{$offer->uuid}}</span>
            </div>
            <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                <strong>From language: </strong>&nbsp;&nbsp; <span class="text-capitalize">{{$offer->from}}</span>
            </div>
            <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                <strong>To language: </strong>&nbsp;&nbsp; <span class="text-capitalize">{{$offer->to}}</span>
            </div>
            <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                <strong>Status: </strong>&nbsp;&nbsp;
                <span>
                    <?php
                        switch ($offer->status) {
                            case 'prepare':
                                echo "Prepare";
                                break;
                            case 'wait_payment':
                                echo "Waiting payment";
                                break;
                            case 'translating':
                                echo "Translating";
                                break;
                            case 'completed':
                                echo "Completed";
                                break;
                            case 'cancel':
                                echo "Canceled";
                                break;
                        }
                    ?>
                </span>
            </div>
            @if($offer->status === 'wait_payment')
                <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                    <strong>Payment link: </strong>&nbsp;&nbsp;
                    <span>
                    <a href="{{url("payment")}}">Press to go to payment link</a>
                </span>
                </div>
            @endif
            <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                <strong>Original file link: </strong>&nbsp;&nbsp;
                <span>
                    <a href="{{url("files/$offer->uuid/$offer->original_filepath")}}">{{$offer->original_filepath}}</a>
                </span>
            </div>
            @if(isset($offer->template_filepath) && $offer->status !== 'prepare')
                <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                    <strong>Template file link: </strong>&nbsp;&nbsp;
                    <span>
                    <a href="{{url("files/$offer->uuid/$offer->template_filepath")}}">{{$offer->template_filepath}}</a>
                </span>
                </div>
            @endif
            @if(isset($offer->translate_filepath) && $offer->status === 'completed')
                <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                    <strong>Translate file link: </strong>&nbsp;&nbsp;
                    <span>
                    <a href="{{url("files/$offer->uuid/$offer->translate_filepath")}}">{{$offer->translate_filepath}}</a>
                </span>
                </div>
            @endif
            @if($offer->word_count)
                <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                    <strong>Word count: </strong>&nbsp;&nbsp; <span>{{$offer->word_count}}</span>
                </div>
            @endisset
            @if($offer->price)
                <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                    <strong>Summary price: </strong>&nbsp;&nbsp; <span>{{$offer->price}}$</span>
                </div>
            @endisset
            @if($offer->tariff)
                <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                    <strong>Price per word: </strong>&nbsp;&nbsp; <span>{{$offer->tariff}}$</span>
                </div>
            @endisset

            <div class="col-12 d-flex flex-wrap justify-content-center" style="font-size: 18px;">
                <strong class="font-italic" style="text-decoration: underline;"> Please check your email! (If you didn't receive mail, check your spam!) </strong>
            </div>
        </div>
    </div>
@endsection
