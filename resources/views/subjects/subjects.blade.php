<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profesores</title>
</head>


<body>
    <input type="button" onclick="location.href='{{ route('subjectCreate') }}';" value="Nuevo" />

    <table style="border: 1px solid gray;border:collapse;">
        <thead>
            <th>Código</th>
            <th>Nombre</th>
            <th>Créditos Academicos</th>
            <th>Área</th>
            <th>Electiva</th>
            <th>Descripción</th>
            <th>Opciones</th>
        </thead>
        <tbody>
            @if ($subjects)
                @foreach ($subjects as $subject)
                    <tr>
                        <td style="border: 1px solid gray;">{{ $subject['id'] }}</td>
                        <td style="border: 1px solid gray;">{{ $subject['name'] }}</td>
                        <td style="border: 1px solid gray;">{{ $subject['academic_credits'] }}</td>
                        <td style="border: 1px solid gray;">{{ $subject['area'] }}</td>
                        <td style="border: 1px solid gray;">{{ $subject['elective'] == 0 ? 'si' : 'no' }}</td>
                        <td style="border: 1px solid gray;">{{ $subject['description'] }}</td>
                        <td style="border: 1px solid gray;" colspan="2">
                            <div>
                                <input type="button"
                                    onclick="location.href='{{ route('subjectShow', $subject['id']) }}';" value="Ver"
                                    style="color:blue">
                                <input type="button"
                                    onclick="location.href='{{ route('subjectEdit', $subject['id']) }}';"
                                    value="Modificar" style="color:orange">
                                <input type="button"
                                    onclick="location.href='{{ route('subjectDelete', $subject['id']) }}';"
                                    value="Eliminar" style="color:red">
                            </div>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</body>

</html>
