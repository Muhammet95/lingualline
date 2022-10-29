<main>
    <div style="border: 1px solid gray; border-radius: 10px;padding: 10px;">
        <div style="border-bottom: 1px solid gray;color: #0a58ca;">
            <h1>You have new message</h1>
        </div>
        <div>
            <p>Message created from: {{$data['name']}}</p>
            <p>Message creator email is: {{$data['email']}}</p>
            <p>Message:</p>
            <p>
                {{$data['message']}}
            </p>
        </div>
    </div>
</main>
