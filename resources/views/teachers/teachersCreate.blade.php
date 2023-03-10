<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo estudiante</title>
</head>

<body>
    <form action="{{ route('teacherStored') }}" method="post">

        @csrf

        <x-inputdiv fieldname="dni" showname="Número Identificación" placeholder="Digite el Identificación" />
        <br>
        <x-inputdiv fieldname="name" showname="Nombre" placeholder="Digite el nombre" />
        <br>
        <x-inputdiv fieldname="last_name" showname="Apellido" placeholder="Digite el apellido" />
        <br>
        <x-inputdiv fieldname="address" showname="Dirección" placeholder="Digite la dirección" />
        <br>
        <x-inputdiv fieldname="city" showname="Ciudad" placeholder="Digite la ciudad" />
        <br>
        <x-inputdiv fieldname="phone" showname="Teléfono" placeholder="Teléfono" type="tel" />
        <br>
        <x-inputdiv fieldname="email" showname="Correo Electronico" placeholder="Digite correo electronico"
            type="email" />
        <br>

        <input type="button" onclick="location.href='{{ route('teacherIndex') }}';" value="Cancelar" />
        <button type="submit">Guardar</button>

    </form>
</body>

</html>
