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
                    <span class="font-italic">lingualline</span> is responsible for showing 5% translation of the whole document to present the quality and make the customer sure about the quality of the translation before the payment. Only after the customer approves the further translation will the service be continued.
                </li>
                <li>
                    The customer must provide a temporary e-mail address to contact. <span class="font-italic">lingualline</span> is not responsible for contact failure with any other communication tools.
                </li>
                <li>
                    <span class="font-italic">lingualline</span> is responsible for only use of file on purpose of translation. The file cannot be shared with the third party on any other purposes.
                </li>
                <li>
                    The customer accepts to have the document translated after the full payment.
                </li>
                <li>
                    <span class="font-italic">lingualline</span> can only get at most 50$, so the number of words must not exceed the maximum service payment.
                </li>
                <li>
                    After the customer gets the whole translation, the payment cannot be refunded.
                </li>
                <li>
                    The translation process starts after the customer approves the quality via email. The delivery time also starts after the approvement.
                </li>
                <li>
                    <span class="font-italic">lingualline</span> is responsible for using the mixed form of translation which are software - based and manual.
                </li>
            </ul>
        </div>
    </div>
@endsection
