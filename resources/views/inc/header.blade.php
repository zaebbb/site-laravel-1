@section('header')
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">ZAEB</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Домой</a>
        <a class="nav-link" href="{{ route('about') }}">О компании</a>
        <a class="nav-link" href="{{ route('contact') }}">Контакты</a>
        <a class="nav-link" href="{{ route('contact-data') }}">Сообщения</a>
      </nav>
    </div>
  </header>
