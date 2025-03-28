@extends('base')

@section('content')

<h2>Atualizar Autor</h2>

<form method="post" action="{{ route('authors.update', $author->id) }}">
    @csrf
    @method("put")
    <input name="name" type="text" required value="{{ $author->name }}">
    <br>
    <input name="country" type="text" required value="{{ $author->country }}">
    <br>
    <input type="submit" value="Atualizar">
</form>


@endsection
