@extends('layouts.app')

@section('title')
    Все сообщения
@endsection

@section('content')
    <h1 class="mb-5">Все сообщения</h1>
    @foreach($data as $el)
    <div class="alert alert-info">
        <!-- <h3>Имя: {{ $el->name }}</h3> -->
        <p>Почта: {{ $el->email }}</p>
        <p>Тема сообщения: {{ $el->subject }}</p>
        <!-- <p>Сообщение: {{ $el->message }}</p> -->
        <p>Дата написания: {{ $el->created_at }}</p>
        <a href="{{ route('contact-data-one', $el->id) }}"><button class="alert alert-danger">Просмотреть сообщение полностью</button></a>
    </div>
    @endforeach
@endsection
