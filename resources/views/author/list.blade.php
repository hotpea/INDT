@extends('index')

@section('content')
    <body>
        <?php foreach($authors as $author) { ?>
            <p>Hello, <?php echo $author['firstName']; ?></p>
        <?php } ?>
    </body>
@endsection
