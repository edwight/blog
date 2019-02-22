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
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>
                    <a href="{{ URL::to('user/'.$user->id .'/edit') }}">editar</a>
                    </td>
                    <td>
                    <a href="{{ URL::to('user/'.$user->id) }}">mostrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
</body>
</html>