@extends('index')

@section('content')
    <div class="pull-right">
        <a class="btn btn-default" href="/addauthor">
            Novo Autor
        </a>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
                <tr>
                    <th scope="row">{{ $author['id'] }}</th>
                    <td>{{ $author['firstName'] }}</td>
                    <td>{{ $author['lastName'] }}</td>
                    <td>
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapse{{ $author['id'] }}" role="button" aria-expanded="false" aria-controls="collapse">
                            Livros
                        </a>
                        <a class="btn btn-default" href="/editauthor/{{ $author['id'] }}">
                            Editar Autor
                        </a>
                        <a class="btn btn-danger" href="/deleteauthor/{{ $author['id'] }}">
                            Excluir Autor
                        </a>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <div class="collapse" id="collapse{{ $author['id'] }}">
                            {{--TODO: tabela com dados dos livros do autor--}}
                            <table class="table">
                                <tbody>
                                    @if (count($author['books']) > 0)
                                        @foreach($author['books'] as $book)
                                            <tr>
                                                <th scope="row">{{ $book['id'] }}</th>
                                                <td>{{ $book['title'] }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td>Sem livros cadastrados</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            <div class="pull-right">
                                <a class="btn btn-default" href="/addbook/{{ $author['id'] }}">
                                    Adicionar livro
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pull-right">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                @if ( ($actual_page - 1) > 0 )
                    <li class="page-item">
                        <a class="page-link" href="/authors/{{ $actual_page - 1}}">Anterior</a>
                    </li>
                @endif

                @for ($i = 1; $i <= $pages; $i++)
                    <li class="page-item">
                        <a class="page-link active" href="/authors/{{ $i }}">{{ $i }}</a>
                    </li>
                @endfor

                @if ( ($actual_page + 1) < $pages )
                    <li class="page-item">
                        <a class="page-link" href="/authors/{{ $actual_page + 1}}">Próximo</a>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
@endsection
