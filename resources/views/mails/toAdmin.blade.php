<main>
    <div style="border: 1px solid gray; border-radius: 10px;padding: 10px;">
        <div style="border-bottom: 1px solid gray;color: #0a58ca;">
            <h1>You have new offer</h1>
        </div>
        <div>
            <p>Offer identifier number: {{$offer->uuid}}</p>
            <p>Offer created from: {{$offer->user_name}}</p>
            <p>Offer creator email is: {{$offer->email}}</p>
            <p>Translate from {{$offer->from}} to {{$offer->to}}</p>
            <p>Translate file: <a href="{{url("files/$offer->uuid/$offer->original_filepath")}}">{{$offer->original_filepath}}</a></p>
        </div>
    </div>
</main>
