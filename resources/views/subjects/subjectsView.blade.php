<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nueva Asginatura
    </title>
</head>

<body>
    <div>
        <x-inputdiv fieldname="name" showname="Nombre" placeholder="Digite el nombre" value="{{ $subject['name'] }}" />
        <br>
        <x-inputdiv fieldname="area" showname="Apellido" placeholder="Digite el apellido"
            value="{{ $subject['area'] }}" />
        <br>
        <x-inputdiv fieldname="academic_credits" showname="Créditos" placeholder="Digite la cantidad de creditos"
            value="{{ $subject['academic_credits'] }}" />
        <br>
        <x-inputdiv fieldname="elective" showname="Teléfono" placeholder="Teléfono" type="tel"
            value="{{ (!old('elective') ? $subject['elective'] : old('elective')) == 0 ? 'No' : 'Si' }}" />
        <br>
        <x-inputdiv fieldname="description" showname="Correo Descripción" placeholder="Ingrese una descripción"
            value="{{ $subject['description'] }}" />
        <br>

        <input type="button" onclick="location.href='{{ route('subjectIndex') }}';" value="Cancelar" />
        <input type="button" onclick="location.href='{{ route('subjectEdit', $subject['id']) }}';" value="Modificar"
            style="color:orange">

    </div>
</body>

</html>
