@extends('index')

@section('content')
    <form class="form-inline">
        <input type="text" class="form-control" id="nome" placeholder="Nome">
        <input type="text" class="form-control" id="sobrenome" placeholder="Sobrenome">
        <button type="submit" class="btn btn-primary mb-2">Salvar</button>
    </form>
@endsection
