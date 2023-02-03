<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo estudiante</title>
</head>

<body>
    <div>
        <x-inputdiv fieldname="dni" showname="Número Identificación" placeholder="Digite el Identificación"
            value="{{ $teacher['teacher']['dni'] }}" />
        <br>
        <x-inputdiv fieldname="name" showname="Nombre" placeholder="Digite el nombre"
            value="{{ $teacher['teacher']['name'] }}" />
        <br>
        <x-inputdiv fieldname="last_name" showname="Apellido" placeholder="Digite el apellido"
            value="{{ $teacher['teacher']['last_name'] }}" />
        <br>
        <x-inputdiv fieldname="address" showname="Dirección" placeholder="Digite la dirección"
            value="{{ $teacher['teacher']['address'] }}" />
        <br>
        <x-inputdiv fieldname="city" showname="Ciudad" placeholder="Digite la ciudad"
            value="{{ $teacher['teacher']['city'] }}" />
        <br>
        <x-inputdiv fieldname="phone" showname="Teléfono" placeholder="Teléfono" type="tel"
            value="{{ $teacher['teacher']['phone'] }}" />
        <br>
        <x-inputdiv fieldname="email" showname="Correo Electronico" placeholder="Digite corremaileo electronico"
            type="email" value="{{ $teacher['teacher']['email'] }}" />
        <br>

        <input type="button" onclick="location.href='{{ route('teacherIndex') }}';" value="Cancelar" />
        <input type="button" onclick="location.href='{{ route('teacherEdit', $teacher['teacher']['id']) }}';"
            value="Modificar" style="color:orange">

    </div>
</body>

</html>
