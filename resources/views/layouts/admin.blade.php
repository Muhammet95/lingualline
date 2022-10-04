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
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($offers as $offer)
                <tr>
                    <form action="{{url('modify_offer')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$offer->id}}">
                        <th scope="row">{{$offer->id}}</th>
                        <td>{{$offer->user_name}}</td>
                        <td>{{$offer->email}}</td>
                        <td>{{$offer->uuid}}</td>
                        <td>{{$offer->from}} -> {{$offer->to}}</td>
                        <td>
                            @if(!empty($offer->original_filepath))
                                <a href="{{url("files/$offer->uuid/$offer->original_filepath")}}">
                                    {{$offer->original_filepath}}
                                </a>
                            @else
                                <input type="file" name="original_filepath">
                            @endif
                        </td>
                        <td>
                            <select name="status" id="status" class="form-select" style="width: 150px;">
                                <option value="prepare" {{$offer->status === 'prepare' ? "selected" : ""}}>Prepare</option>
                                <option value="wait_payment" {{$offer->status === 'wait_payment' ? "selected" : ""}}>Waiting for payment</option>
                                <option value="translating" {{$offer->status === 'translating' ? "selected" : ""}}>Translating</option>
                                <option value="completed" {{$offer->status === 'completed' ? "selected" : ""}}>Completed</option>
                                <option value="cancel" {{$offer->status === 'cancel' ? "selected" : ""}}>Canceled</option>
                            </select>
                        </td>
                        <td>
                            @if(!empty($offer->template_filepath))
                                <a href="{{url("files/$offer->uuid/$offer->template_filepath")}}">
                                    {{$offer->template_filepath}}
                                </a>
                            @else
                                <input type="file" name="template_filepath">
                            @endif
                        </td>
                        <td>
                            @if(!empty($offer->translate_filepath))
                                <a href="{{url("files/$offer->uuid/$offer->translate_filepath")}}">
                                    {{$offer->translate_filepath}}
                                </a>
                            @else
                                <input type="file" name="translate_filepath">
                            @endif
                        </td>
                        <td>
                            <input type="text" name="word_count" id="word_count" value="{{$offer->word_count}}">
                        </td>
                        <td>
                            <input type="text" name="price" id="word_count" value="{{$offer->price}}">
                        </td>
                        <td>
                            <input type="text" name="tariff" id="word_count" value="{{$offer->tariff}}">
                        </td>
                        <td>
                            <button type="submit" class="btn btn-outline-success">Save</button>
                        </td>
                    </form>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

