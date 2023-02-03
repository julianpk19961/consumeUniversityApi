<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar estudiante</title>
</head>

<body>
    <form action="{{ route('studentUpdate', $student['id']) }}" method="post">
        @csrf
        @method('POST')
        <x-inputdiv fieldname="dni" showname="Número Identificación" placeholder="Digite el Identificación"
            value="{{ !old('dni') ? $student['dni'] : old('dni') }}" />
        <br>
        <x-inputdiv fieldname="name" showname="Nombre" placeholder="Digite el nombre"
            value="{{ !old('name') ? $student['name'] : old('name') }}" />
        <br>
        <x-inputdiv fieldname="last_name" showname="Apellido" placeholder="Digite el apellido"
            value="{{ !old('last_name') ? $student['last_name'] : old('last_name') }}" />
        <br>
        <x-inputdiv fieldname="inscription_date" showname="Fecha Inscripción" placeholder="Fecha Ingreso" type="date"
            value="{{ !old('inscription_date') ? $student['inscription_date'] : old('inscription_date') }}" />
        <br>
        <x-inputdiv fieldname="phone" showname="Teléfono" placeholder="Teléfono" type="tel"
            value="{{ !old('phone') ? $student['phone'] : old('phone') }}" />
        <br>
        <x-inputdiv fieldname="email" showname="Correo Electronico" placeholder="Digite correo electronico"
            type="email" value="{{ !old('email') ? $student['email'] : old('email') }}" />
        <br>
        <x-inputdiv fieldname="address" showname="Dirección Residencia" placeholder="Digite la dirección"
            value="{{ !old('address') ? $student['address'] : old('address') }}" />

        <input type="button" onclick="location.href='{{ route('studentIndex') }}';" value="Cancelar" />
        <button type="submit">Guardar</button>

    </form>
</body>

</html>
