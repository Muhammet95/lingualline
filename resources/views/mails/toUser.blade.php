<main>
    <div style="border: 1px solid gray; border-radius: 10px; padding: 10px;">
        <div style="border-bottom: 1px solid gray; color: #1e7e34;">
            <h1>Offer information</h1>
        </div>
        <div>
            <p>Offer password number: {{$offer->uuid}}</p>
            <p>
                Offer status:
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
            </p>
            <p>Translate from {{$offer->from}} to {{$offer->to}}</p>
            <p>Original file: <a href="{{url("files/$offer->uuid/$offer->original_filepath")}}">{{$offer->original_filepath}}</a></p>
            @if(isset($offer->template_filepath) && $offer->status !== 'prepare')
                <p>Template file: <a href="{{url("files/$offer->uuid/$offer->template_filepath")}}">{{$offer->template_filepath}}</a></p>
            @endif
            @if(isset($offer->translate_filepath) && $offer->status === 'completed')
                <p>Translate file: <a href="{{url("files/$offer->uuid/$offer->translate_filepath")}}">{{$offer->translate_filepath}}</a></p>
            @endif
        </div>
    </div>
</main>
