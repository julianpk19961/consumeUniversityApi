<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profesores</title>
</head>


<body>
    {{-- 
    @foreach ($teachers as $teacher)
        @dd($teacher['teacher'])
    @endforeach --}}

    {{-- @dd($teachers->message) --}}
    <input type="button" onclick="location.href='{{ route('teacherCreate') }}';" value="Nuevo" />

    <table style="border: 1px solid gray;border:collapse;">
        <thead>
            <th>Código</th>
            <th>Nombre</th>
            <th>Inscrito</th>
            <th>Ciudad</th>
            <th>Teléfono</th>
            <th>Corrreo</th>
            <th>Dirección</th>
            <th>Materias</th>
            <th>Opciones</th>
        </thead>
        <tbody>
            {{-- @dd($teachers) --}}
            @foreach ($teachers as $teacher)
                <tr>
                    <td style="border: 1px solid gray;">{{ $teacher['teacher']['id'] }}</td>
                    <td style="border: 1px solid gray;">{{ $teacher['teacher']['name'] }}</td>
                    <td style="border: 1px solid gray;">{{ $teacher['teacher']['last_name'] }}</td>
                    <td style="border: 1px solid gray;">{{ $teacher['teacher']['city'] }}</td>
                    <td style="border: 1px solid gray;">{{ $teacher['teacher']['phone'] }}</td>
                    <td style="border: 1px solid gray;">{{ $teacher['teacher']['email'] }}</td>
                    <td style="border: 1px solid gray;">{{ $teacher['teacher']['address'] }}</td>
                    <td style="border: 1px solid gray;">
                        @foreach ($teacher['teacher']['subjects'] as $subject)
                            <p>{{ $subject['name'] }}</p>
                        @endforeach
                    </td>

                    <td style="border: 1px solid gray;" colspan="2">
                        <div>
                            <input type="button"
                                onclick="location.href='{{ route('teacherShow', $teacher['teacher']['id']) }}';"
                                value="Ver" style="color:blue">
                            <input type="button"
                                onclick="location.href='{{ route('teacherEdit', $teacher['teacher']['id']) }}';"
                                value="Modificar" style="color:orange">
                            <input type="button"
                                onclick="location.href='{{ route('teacherDelete', $teacher['teacher']['id']) }}';"
                                value="Eliminar" style="color:red">
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
