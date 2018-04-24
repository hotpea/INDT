@extends('index')

@section('content')
    <form class="form-inline" action="/saveauthor" method="post">
            <input type="hidden" name="id" class="form-control" placeholder="id" value="{{ $author['id'] }}">
            <input type="text" name="nome" class="form-control" placeholder="Nome" value="{{ $author['firstName'] }}">
            <input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome" value="{{ $author['lastName'] }}">
            <button type="submit" class="btn btn-primary mb-2">Salvar</button>
    </form>
@endsection
