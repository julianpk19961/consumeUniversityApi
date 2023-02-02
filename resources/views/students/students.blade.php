<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asignaturas</title>
</head>


<body>
    <input type="button" onclick="location.href='{{ route('studentCreate') }}';" value="Nuevo" />

    <table>
        <thead>
            <th>Código</th>
            <th>Nombre</th>
            <th>Inscrito</th>
            <th>Semestre</th>
            <th>Teléfono</th>
            <th>Corrreo</th>
            <th>Dirección</th>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr id="{{ $student['id'] }}">
                    <td>{{ $student['id'] }}</td>
                    <td>{{ $student['name'] . ' ' . $student['last_name'] }}</td>
                    <td>{{ $student['inscription_date'] }}</td>
                    <td>{{ $student['semester'] }}</td>
                    <td>{{ $student['phone'] }}</td>
                    <td>{{ $student['email'] }}</td>
                    <td>{{ $student['address'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
