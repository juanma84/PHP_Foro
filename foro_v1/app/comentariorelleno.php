

<?php

$tema=$_REQUEST['tema'];
$opinion=$_REQUEST['opinion'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>comentario</title>
</head>
<body>
<form name="comentario" method="POST">
<label>tema:</label>
<input type="text" name="tema" value="<?php echo $tema?>" />

<br>
    <label>opinion:</label></br>
    <textarea name="opinion" rows="10" cols="40"  maxlength="300" /><?php echo $opinion ?></textarea></br>
<input  type="submit" name="orden" value="Detalles"/>
<input  type="submit" name="orden" value="Nueva opinión"/>
<input  type="submit" name="orden" value="Terminar"/>
</form>
</body>
</html>


