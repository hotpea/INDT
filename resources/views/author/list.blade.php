@extends('index')

@section('content')
    <div class="pull-right">
        <a class="btn btn-default" href="/add-author">
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
            <?php foreach($authors as $author) { ?>
                <tr>
                    <th scope="row"><?php echo $author['id']; ?></th>
                    <td><?php echo $author['firstName']; ?></td>
                    <td><?php echo $author['lastName']; ?></td>
                    <td>
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapse<?php echo $author['id']; ?>" role="button" aria-expanded="false" aria-controls="collapse">
                            Livros
                        </a>
                        <a class="btn btn-default">
                            Editar Autor
                        </a>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <div class="collapse" id="collapse<?php echo $author['id']; ?>">
                            {{--TODO: tabela com dados dos livros do autor--}}
                            <table class="table">
                                <tbody>
                                    <?php foreach($authors as $author) { ?>
                                        <tr>
                                            <th scope="row"><?php echo $author['id']; ?></th>
                                            <td><?php echo $author['firstName']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
@endsection
