<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $subject['name'] }}</title>
</head>

<body>
    <form action="{{ route('subjectUpdate', $subject['id']) }}" method="post">
        @csrf
        @method('POST')
        <br>
        <x-inputdiv fieldname="name" showname="Nombre" placeholder="Digite el nombre"
            value="{{ !old('name') ? $subject['name'] : old('name') }}" />
        <br>
        <x-inputdiv fieldname="area" showname="Area" placeholder="Digite el Area"
            value="{{ !old('area') ? $subject['area'] : old('area') }}" />
        <br>
        <x-inputdiv fieldname="academic_credits" showname="Creditos acádemicos" placeholder="Creditos acádemicos"
            type="text"
            value="{{ !old('academic_credits') ? $subject['academic_credits'] : old('academic_credits') }}" />
        <br>
        <x-inputdiv fieldname="elective" showname="Electiva" placeholder="Electiva"
            value="{{ (!old('elective') ? $subject['elective'] : old('elective')) == 0 ? 'No' : 'Si' }}" />
        <br>
        <x-inputdiv fieldname="description" showname="description" placeholder="description" type="tel"
            value="{{ !old('description') ? $subject['description'] : old('description') }}" />
        <br>

        <input type="button" onclick="location.href='{{ route('subjectIndex') }}';" value="Cancelar" />
        <button type="submit" style="color:green">Guardar</button>

    </form>
</body>

</html>
