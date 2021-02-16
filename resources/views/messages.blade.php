@extends('layouts.app')

@section('title-block')
    Все Сообщение
@endsection

@section('content')
    <h1> Все Сообщение</h1>
    @foreach($data as $elem)
        <div class="alert alert-info">
            <h3>{{ $elem->subject }}</h3>
            <p>{{ $elem->email }}</p>
            <p><small>{{ $elem->created_at }}</small></p>
            <a href="#"><button class="btn btn-warning">Детальнее</button></a>
        </div>
    @endforeach
@endsection
