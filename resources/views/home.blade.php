@extends('layouts.app')

@section('title-block')
    Home
@endsection

@section('content')
    <h1>Home</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam aliquam rem consectetur modi sit 
        eum explicabo dolorem sunt ducimus earum quaerat, qui debitis tenetur accusamus culpa eos? Repellat,
        vel asperiores!
    </p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection
