@extends('layouts.index')

@section('content')
    <div class="col-12 mt-2 mb-2  block-3 border rounded text-center p-0 card" style="background: rgba(256, 256, 256, 0.7)">
        <div class="card-header">
            <strong style="font-size: 20px;font-weight: bold;">{{__("base.offer")}}</strong>
        </div>
        <div class="card-body">
            <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                <strong>{{__("base.name")}}: </strong>&nbsp;&nbsp; <span>{{$offer->user_name}}</span>
            </div>
            <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                <strong>{{__("base.mail")}}: </strong>&nbsp;&nbsp; <span>{{$offer->email}}</span>
            </div>
            <div class="col-12 d-flex flex-wrap" style="font-size: 18px;text-decoration: underline;">
                <strong>{{__("base.password")}}: </strong>&nbsp;&nbsp; <span>{{$offer->uuid}}</span>
            </div>
            <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                <strong>{{__("base.from_language")}}: </strong>&nbsp;&nbsp; <span class="text-capitalize">{{$offer->from}}</span>
            </div>
            <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                <strong>{{__("base.to_language")}}: </strong>&nbsp;&nbsp; <span class="text-capitalize">{{$offer->to}}</span>
            </div>
            <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                <strong>{{__("base.status")}}: </strong>&nbsp;&nbsp;
                <span class="bg-success text-white"
                      style="padding: 0 5px 0 5px;"
                >
                    <?php
                        switch ($offer->status) {
                            case 'prepare':
                                echo __("base.prepare");
                                break;
                            case 'wait_payment':
                                echo __("base.wait_payment");
                                break;
                            case 'translating':
                                echo __("base.translate");
                                break;
                            case 'completed':
                                echo __("base.completed");
                                break;
                            case 'cancel':
                                echo __("base.cancel");
                                break;
                        }
                    ?>
                </span>
            </div>
            @if($offer->status === 'wait_payment')
                <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                    <strong>{{__("base.payment_link")}}: </strong>&nbsp;&nbsp;
                    <span>
                    <a href="{{url("payment")}}">{{__("base.press_to_payment")}}</a>
                </span>
                </div>
            @endif
            <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                <strong>{{__("base.original_file_link")}}: </strong>&nbsp;&nbsp;
                <span>
                    <a href="{{url("files/$offer->uuid/$offer->original_filepath")}}">{{$offer->original_filepath}}</a>
                </span>
            </div>
            @if(isset($offer->template_filepath) && $offer->status !== 'prepare')
                <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                    <strong>{{__("base.template_file_link")}}: </strong>&nbsp;&nbsp;
                    <span>
                    <a href="{{url("files/$offer->uuid/$offer->template_filepath")}}">{{$offer->template_filepath}}</a>
                </span>
                </div>
            @endif
            @if(isset($offer->translate_filepath) && $offer->status === 'completed')
                <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                    <strong>{{__("base.translate_file_link")}}: </strong>&nbsp;&nbsp;
                    <span>
                    <a href="{{url("files/$offer->uuid/$offer->translate_filepath")}}">{{$offer->translate_filepath}}</a>
                </span>
                </div>
            @endif
            @if($offer->word_count)
                <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                    <strong>{{__("base.word_count")}}: </strong>&nbsp;&nbsp; <span>{{$offer->word_count}}</span>
                </div>
            @endisset
            @if($offer->price)
                <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                    <strong>{{__("base.summary_price")}}: </strong>&nbsp;&nbsp; <span>{{$offer->price}}$</span>
                </div>
            @endisset
            @if($offer->tariff)
                <div class="col-12 d-flex flex-wrap" style="font-size: 18px;">
                    <strong>{{__("base.price_per_word")}}: </strong>&nbsp;&nbsp; <span>{{$offer->tariff}}$</span>
                </div>
            @endisset
            <form action="/check_offer" method="post">
                @csrf
                <input type="hidden" name="uuid" value="{{$offer->uuid}}">
                <button type="submit" class="btn btn-primary">Check order</button>
            </form>

            <div class="col-12 d-flex flex-wrap justify-content-center" style="font-size: 18px;">
                <strong class="font-italic" style="text-decoration: underline;"> {{__("base.check_mail_notification")}} </strong>
            </div>
        </div>
    </div>
@endsection
