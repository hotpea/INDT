@extends('index')

@section('content')
    <form class="form-inline" action="/savebook" method="post">
            <input type="hidden" name="id" class="form-control" placeholder="id" value="{{ $book['id'] }}">
            <input type="hidden" name="autorid" class="form-control" value="{{ $book['authorId'] }}">
            <input type="text" name="titulo" class="form-control" placeholder="Título" value="{{ $book['title'] }}">
            <button type="submit" class="btn btn-primary mb-2">Salvar</button>
    </form>
@endsection
