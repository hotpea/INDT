@extends('index')

@section('content')
    <form class="form-inline" action="/savebook" method="post">
            <input type="hidden" name="autorid" class="form-control" value="{{ $authorid }}">
            <input type="text" name="titulo" class="form-control" placeholder="Título">
            <button type="submit" class="btn btn-primary mb-2">Salvar</button>
    </form>
@endsection
