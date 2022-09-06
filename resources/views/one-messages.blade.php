@extends('layouts.app')

@section('title')
    Сообщение № {{ $data->id }}
@endsection

@section('content')
    <h1 class="mb-5">Сообщение № {{ $data->id }}</h1>
    <div class="alert alert-info">
        <h3>Имя: {{ $data->name }}</h3>
        <p>Почта: {{ $data->email }}</p>
        <p>Тема сообщения: {{ $data->subject }}</p>
        <p>Сообщение: {{ $data->message }}</p>
        <p>Дата написания: {{ $data->created_at }}</p>
        <a href="{{ route('contact-update', $data->id) }}"><button class="alert alert-light bg-dark" style="color:#fff">Редактировать</button></a>
        <a href="{{ route('contact-delete', $data->id) }}"><button class="alert alert-light bg-danger" style="color:#fff">Удалить</button></a>
    </div>
@endsection
