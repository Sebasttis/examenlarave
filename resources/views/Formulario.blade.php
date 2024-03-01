<h1>Formulario</h1>

<form action="{{route('primo.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Ingresa la nota 1:
    <br>
    <input type="text" name="note1">

</label>
<br>
<label>
    Ingresa la nota 2:
    <br>
    <input type="text" name="note2">
</label>
<br>
<label>
    Ingresa la nota 3:

    <br>
    <input type="text" name="note3">
</label>

<button type="submit">Promedio de notas:</button>
</form>