<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $student['name'] . ' ' . $student['last_name'] }}</title>
</head>

<body>
    <div>

        {{-- @dd($student) --}}
        @dump($student)
        <x-inputdiv fieldname="dni" showname="Número Identificación" placeholder="Digite el Identificación"
            value="{{ $student['dni'] }}" />
        <br>
        <x-inputdiv fieldname="name" showname="Nombre" placeholder="Digite el nombre" value="{{ $student['name'] }}" />
        <br>
        <x-inputdiv fieldname="last_name" showname="Apellido" placeholder="Digite el apellido"
            value="{{ $student['last_name'] }}" />
        <br>
        <x-inputdiv fieldname="inscription_date" showname="Fecha Inscripción" placeholder="Fecha Ingreso" type="date"
            value="{{ $student['inscription_date'] }}" />
        <br>
        <x-inputdiv fieldname="phone" showname="Teléfono" placeholder="Teléfono" type="tel"
            value="{{ $student['phone'] }}" />
        <br>
        <x-inputdiv fieldname="email" showname="Correo Electronico" placeholder="Digite correo electronico"
            type="email" value="{{ $student['email'] }}" />
        <br>
        <x-inputdiv fieldname="address" showname="Dirección Residencia" placeholder="Digite la dirección"
            value="{{ $student['address'] }}" />
        <br>
        <x-inputdiv fieldname="semester" showname="Semestre" placeholder="Semestre del alumno"
            value="{{ $student['semester'] }}" />

        <input type="button" onclick="location.href='{{ route('studentIndex') }}';" value="Cancelar" />
        <input type="button" onclick="location.href='{{ route('studentEdit', $student['id']) }}';" value="Modificar"
            style="color:orange">

    </div>
</body>

</html>
