Fomulario de Creación de Empleado.
<form action="/empleado" method="post" enctype="multipart/form-data">
    @csrf
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre">
    <br>
    <label for="ApellidoPaterno">Apellido Paterno:</label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno">
    <br>
    <label for="ApellidoMaterno">Apellido Materno:</label>
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno">
    <br>
    <label for="Email">Email:</label>
    <input type="text" name="Email" id="Email">
    <br>
    <label for="Foto">Foto:</label>
    <input type="file" name="Foto" id="Foto">
    <br>
    <label for="Submit">Enviar:</label>
    <input type="submit" value="Enviar">
    <br>
</form>

