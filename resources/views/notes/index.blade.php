<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listado de notas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notes as $note)
                <tr>
                    <th scope="row">{{ $note->id }}</th>
                    <td>{{ $note->title }}</td>
                    <td>
                    @can('destroy_notes')
                        <a href="{{ route('notes.destroy', $note->id) }}">Eliminar nota</a>
                    @else
                        Usted no puede eliminar esta nota
                    @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
</body>
</html>