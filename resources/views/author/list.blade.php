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
                                    <?php if(count($author['books']) > 0) { ?>
                                        <?php foreach($author['books'] as $book) { ?>
                                            <tr>
                                                <th scope="row"><?php echo $book['id']; ?></th>
                                                <td><?php echo $book['title']; ?></td>
                                            </tr>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <tr>
                                            <td>Sem livros cadastrados</td>
                                        </tr>
                                    <?php }  ?>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="pull-right">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Anterior</a>
                </li>

                <?php for ($i = 1; $i <= $pages; $i++) { ?>
                    <li class="page-item">
                        <a class="page-link active" href="/authors/<?php echo $i;?>"><?php echo $i;?></a>
                    </li>
                <?php } ?>

                <li class="page-item">
                    <a class="page-link" href="#">Próximo</a>
                </li>
            </ul>
        </nav>
    </div>
@endsection
