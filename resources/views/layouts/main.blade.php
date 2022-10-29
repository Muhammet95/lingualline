@extends('layouts.index')

@section('content')
    <div class="col-12 d-flex justify-content-around">
        @if($type !== 'create')
            <div class="col-4 mt-2 mb-2  block-2 border rounded text-center p-0 card" style="background: rgba(256, 256, 256, 0.7)">
                <div class="card-header">
                    <strong style="font-size: 20px;font-weight: bold;">{{__("base.check_offer")}}</strong>
                </div>
                <div class="card-body">
                    <form action="{{url('/check_offer')}}" method="POST">
                        @csrf
                        <label for="password" class="form-label mt-2">{{__("base.password")}}:</label>
                        <input type="text" id="password" name="uuid" class="form-control" required>
                        <button type="submit" class="btn btn-primary w-50 mt-4 mb-2">{{__("base.check")}}</button>
                    </form>
                    <div class="col-12 mt-5">
            <span class="text-black font-italic" style="text-decoration: underline;">
                {{__("base.per_word")}}.
            </span>
                    </div>
                </div>
            </div>
        @endif

        @if($type !== 'check')
            <div class="col-7 mt-2 mb-2  block-3 border rounded text-center p-0 card" style="background: rgba(256, 256, 256, 0.7)">
                <div class="card-header">
                    <strong style="font-size: 20px;font-weight: bold;">{{__("base.create_offer")}}</strong>
                </div>
                <div class="card-body">
                    <form action="{{url('/add-offer')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="fio" class="form-label mt-2">1. {{__("base.write_name")}}:</label>
                        <input type="text" id="fio" name="fio" class="form-control" required>
                        <label for="email" class="form-label mt-2">2. {{__("base.write_mail")}}:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                        <label for="language" class="form-label mt-2">3. {{__("base.select_language")}}:</label>
                        <div class="d-flex justify-content-around text-left">
                            <div class="col-5 border p-1 rounded">
                                <label for="language">{{__("base.from")}}</label>
                                <select name="from" id="language" class="form-control">
                                    <option value="english" selected>{{__("base.english")}}</option>
                                    <option value="turkish">{{__("base.turkey")}}</option>
                                    <option value="russian">{{__("base.russian")}}</option>
                                </select>
                            </div>
                            <div class="col-5 border p-1 rounded">
                                <label for="to">{{__("base.to")}}</label>
                                <select name="to" id="to" class="form-control">
                                    <option value="english" selected>{{__("base.english")}}</option>
                                    <option value="turkish" selected>{{__("base.turkey")}}</option>
                                    <option value="russian">{{__("base.russian")}}</option>
                                </select>
                            </div>
                        </div>
                        <label for="file" class="form-label mt-2">4. {{__("base.upload_file")}}:</label><br>
                        <label for="file" class="form-label uploadLabel col-12">{{__("base.upload")}}</label>
                        <input type="file" id="file" name="file" style="width: 0; height: 0;" required><br>
                        <button type="submit" class="btn btn-primary w-50">{{__("base.send")}}</button>
                    </form>
                </div>
            </div>
        @endif
    </div>
@endsection
