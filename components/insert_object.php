<link rel="stylesheet" href="/ugv_inventario/css/conctact.css">

<div class="container">
    <form action="action_page.php">

        <label for="objname">Nombre</label>
        <input type="text" id="objname" name="firstname" placeholder="Marca, Modelo, Color..">

        <label for="objns">Numero de Serie</label>
        <input type="text" id="objns" name="lastname" placeholder="Numero de Serie..">

        <label for="objdescription">Descripción</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
        
        <label for="objdepartament">Departamento</label>
        <select id="objdepartament" name="country">
            <option value="administracion">Administración</option>
            <option value="academico">Academico</option>
            <option value="direccion">Dirección</option>
            <option value="planeacion">Planeación</option>
        </select>

        

        <input type="submit" value="Submit">

    </form>
</div>
