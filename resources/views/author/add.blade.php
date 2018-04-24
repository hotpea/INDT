@extends('index')

@section('content')
    <form class="form-inline" action="/saveauthor" method="post">
        <input type="text" name="nome" class="form-control" placeholder="Nome">
        <input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome">
        <button type="submit" class="btn btn-primary mb-2">Salvar</button>
    </form>
@endsection
