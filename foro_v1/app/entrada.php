
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>entrada</title>

</head>

<body>

    <form name='entrada' method="POST" >
<table>
<tr>
<td>Nombre:</td><td> <input type="text" name="nombre" 
    value="<?=(isset($_REQUEST['nombre']))?$_REQUEST['nombre']:''?>"></td></tr>
<tr>
<td>Contraseña: </td><td><input type="password" name="contraseña"
    value="<?=(isset($_REQUEST['contraseña']))?$_REQUEST['contraseña']:''?>"></td>
</tr>
</table>
<input type="submit" name="orden" value="Entrar">
</form>

</body>

</html>