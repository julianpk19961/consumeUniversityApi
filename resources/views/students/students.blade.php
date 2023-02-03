<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudiantes</title>
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
            <th>Opciones</th>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student['id'] }}</td>
                    <td>{{ $student['name'] . ' ' . $student['last_name'] }}</td>
                    <td>{{ $student['inscription_date'] }}</td>
                    <td>{{ $student['semester'] }}</td>
                    <td>{{ $student['phone'] }}</td>
                    <td>{{ $student['email'] }}</td>
                    <td>{{ $student['address'] }}</td>
                    <td colspan="2">
                        <div>
                            <input type="button" onclick="location.href='{{ route('studentShow', $student['id']) }}';"
                                value="Ver" style="color:blue">
                            <input type="button" onclick="location.href='{{ route('studentEdit', $student['id']) }}';"
                                value="Modificar" style="color:orange">
                            <input type="button"
                                onclick="location.href='{{ route('studentDelete', $student['id']) }}';"
                                value="Eliminar" style="color:red">
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
