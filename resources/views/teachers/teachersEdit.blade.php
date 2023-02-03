<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $teacher['teacher']['name'] . ' ' . $teacher['teacher']['last_name'] }}</title>
</head>

<body>
    <form action="{{ route('teacherUpdate', $teacher['teacher']['id']) }}" method="post">
        @csrf
        @method('POST')
        <x-inputdiv fieldname="dni" showname="Número Identificación" placeholder="Digite el Identificación"
            value="{{ !old('dni') ? $teacher['teacher']['dni'] : old('dni') }}" />
        <br>
        <x-inputdiv fieldname="name" showname="Nombre" placeholder="Digite el nombre"
            value="{{ !old('name') ? $teacher['teacher']['name'] : old('name') }}" />
        <br>
        <x-inputdiv fieldname="last_name" showname="Apellido" placeholder="Digite el apellido"
            value="{{ !old('last_name') ? $teacher['teacher']['last_name'] : old('last_name') }}" />
        <br>
        <x-inputdiv fieldname="city" showname="Ciudad" placeholder="Ciudad" type="text"
            value="{{ !old('city') ? $teacher['teacher']['city'] : old('city') }}" />
        <br>
        <x-inputdiv fieldname="address" showname="Dirección Residencia" placeholder="Digite la dirección"
            value="{{ !old('address') ? $teacher['teacher']['address'] : old('address') }}" />
        <br>
        <x-inputdiv fieldname="phone" showname="Teléfono" placeholder="Teléfono" type="tel"
            value="{{ !old('phone') ? $teacher['teacher']['phone'] : old('phone') }}" />
        <br>
        <x-inputdiv fieldname="email" showname="Correo Electronico" placeholder="Digite correo electronico"
            type="email" value="{{ !old('email') ? $teacher['teacher']['email'] : old('email') }}" />

        <input type="button" onclick="location.href='{{ route('teacherIndex') }}';" value="Cancelar" />
        <button type="submit" style="color:green">Guardar</button>

    </form>
</body>

</html>
