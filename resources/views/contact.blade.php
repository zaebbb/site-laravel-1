@extends('layouts.app')

@section('title')
    Контакты
@endsection

@section('content')
    <h1>Контактный лист</h1>

    <form action="{{ route('contact-form') }}" method="post">
    @csrf

        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите ваше имя" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Введите Email</label>
            <input type="email" name="email" placeholder="Введите ваш Email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Введите тему сообщения</label>
            <input type="text" name="subject" placeholder="Введите тему сообщения" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea name="message" placeholder="Введите cообщение" id="message" class="form-control"></textarea>
        </div>

        <button type="sumbit" name="button" class="btn-play">Отправить</button>
    </form>
@endsection
    
