@extends('layouts.app')

@section('title')
Обновление записи №{{ @$data->id }}
@endsection

@section('content')
    <h1>Обновление записи №{{ $data->id }}</h1>

    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
    @csrf

        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите ваше имя" id="name" class="form-control" value="{{ $data->name }}">
        </div>
        <div class="form-group">
            <label for="email">Введите Email</label>
            <input type="email" name="email" placeholder="Введите ваш Email" id="email" class="form-control" value="{{ $data->email }}">
        </div>
        <div class="form-group">
            <label for="subject">Введите тему сообщения</label>
            <input type="text" name="subject" placeholder="Введите тему сообщения" id="subject" class="form-control" value="{{ $data->subject }}">
        </div>
        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea name="message" placeholder="Введите cообщение" id="message" class="form-control">{{ $data->message }}</textarea>
        </div>

        <button type="sumbit" name="button" class="btn-play">Обновить</button>
    </form>
@endsection
    
