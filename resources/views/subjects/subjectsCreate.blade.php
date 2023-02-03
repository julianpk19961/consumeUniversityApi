<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nueva asignatura</title>
</head>

<body>
    <form action="{{ route('subjectStored') }}" method="post">

        @csrf

        <x-inputdiv fieldname="name" showname="Nombre" placeholder="Digite el nombre" />
        <br>
        <x-inputdiv fieldname="area" showname="Área" placeholder="Digite el Área" />
        <br>
        <x-inputdiv fieldname="academic_credits" showname="No Créditos" placeholder="Digite el número de créditos" />
        <br>
        <x-inputdiv fieldname="elective" showname="Electiva" placeholder="Electiva" />
        <br>
        <x-inputdiv fieldname="description" showname="Descripción" placeholder="Descripción de la asignatura" />
        <br>

        <input type="button" onclick="location.href='{{ route('teacherIndex') }}';" value="Cancelar" />
        <button type="submit">Guardar</button>

    </form>
</body>

</html>
