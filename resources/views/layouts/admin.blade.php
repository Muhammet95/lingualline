@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">From -> To</th>
                <th scope="col">Original file</th>
                <th scope="col">Status</th>
                <th scope="col">Template file</th>
                <th scope="col">Translate file</th>
                <th scope="col">Word count</th>
                <th scope="col">Price</th>
                <th scope="col">Tariff</th>
            </tr>
            </thead>
            <tbody>
            @foreach($offers as $offer)
                <tr>
                    <th scope="row">{{$offer->id}}</th>
                    <td>{{$offer->user_name}}</td>
                    <td>{{$offer->email}}</td>
                    <td>{{$offer->uuid}}</td>
                    <td>{{$offer->from}} -> {{$offer->to}}</td>
                    <td>
                        <a href="{{url("files/$offer->uuid/$offer->original_filepath")}}">
                            {{$offer->original_filepath}}
                        </a>
                    </td>
                    <td>
                        <select name="status" id="status" class="form-select" style="width: 150px;">
                            <option value="prepare">Prepare</option>
                            <option value="wait_payment">Waiting for payment</option>
                            <option value="translating">Translating</option>
                            <option value="completed">Completed</option>
                            <option value="cancel">Canceled</option>
                        </select>
                    </td>
                    <td>
                        <input type="file">
                    </td>
                    <td>
                        <input type="file">
                    </td>
                    <td>
                        <input type="text" name="word_count" id="word_count" value="{{$offer->word_count}}">
                    </td>
                    <td>
                        <input type="text" name="word_count" id="word_count" value="{{$offer->price}}">
                    </td>
                    <td>
                        <input type="text" name="word_count" id="word_count" value="{{$offer->tariff}}">
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    
@endsection

