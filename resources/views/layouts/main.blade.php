@extends('layouts.index')

@section('content')
    <div class="col-4 mt-2 mb-2  block-2 border rounded text-center p-0 card" style="background: rgba(256, 256, 256, 0.7)">
        <div class="card-header">
            <strong style="font-size: 20px;font-weight: bold;">Check Your Offer</strong>
        </div>
        <div class="card-body">
            <form action="{{url('/check_offer')}}" method="POST">
                @csrf
                <label for="password" class="form-label mt-2">Password:</label>
                <input type="text" id="password" name="uuid" class="form-control" required>
                <button type="submit" class="btn btn-primary w-50 mt-4 mb-2">Check</button>
            </form>
            <div class="col-12 mt-5">
            <span class="text-black font-italic" style="text-decoration: underline;">
                0.03$ per word.
            </span>
            </div>
        </div>
    </div>
    <div class="col-7 mt-2 mb-2  block-3 border rounded text-center p-0 card" style="background: rgba(256, 256, 256, 0.7)">
        <div class="card-header">
            <strong style="font-size: 20px;font-weight: bold;">Create New Offer</strong>
        </div>
        <div class="card-body">
            <form action="{{url('/add-offer')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="fio" class="form-label mt-2">1.Write the full name:</label>
                <input type="text" id="fio" name="fio" class="form-control" required>
                <label for="email" class="form-label mt-2">2. Write the e-mail:</label>
                <input type="email" id="email" name="email" class="form-control" required>
                <label for="language" class="form-label mt-2">3. Chose the language:</label>
                <div class="d-flex justify-content-around text-left">
                    <div class="col-5 border p-1 rounded">
                        <label for="language">From</label>
                        <select name="from" id="language" class="form-control">
                            <option value="english" selected>English</option>
                            <option value="turkey">Turkey</option>
                            <option value="russian">Russian</option>
                        </select>
                    </div>
                    <div class="col-5 border p-1 rounded">
                        <label for="to">To</label>
                        <select name="to" id="to" class="form-control">
                            <option value="english" selected>English</option>
                            <option value="turkey" selected>Turkey</option>
                            <option value="russian">Russian</option>
                        </select>
                    </div>
                </div>
                <label for="file" class="form-label mt-2">4. Upload the file:</label><br>
                <label for="file" class="form-label uploadLabel col-12">Upload</label>
                <input type="file" id="file" name="file" style="width: 0; height: 0;" required><br>
                <button type="submit" class="btn btn-primary w-50">Send</button>
            </form>
        </div>
    </div>
@endsection
