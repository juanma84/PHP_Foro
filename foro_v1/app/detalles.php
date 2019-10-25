

<?php

function detallar() {
		$letra = "";
		$maximo = 0;
		$texto = $_POST['opinion'];
		$abecedario = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z'];				
		for($i = 0; $i < count($abecedario); $i++){
			if(substr_count($texto, $abecedario[$i])>$maximo){
					$maximo = $maximo + substr_count($texto, $abecedario[$i]);
					$letra =  $abecedario[$i];
				}
		}
        $contenido="";
        $numeroDePalabras = str_word_count($_POST['opinion']);
        $longitudTexto = strlen($_POST['opinion']);
        $arrayPalabras = explode(" ",$_POST['opinion']);
        $palabrasMasRepetida = $arrayPalabras[0];
	$longitud = count($arrayPalabras);
	$contadorTemporal = 0;
	$contadorMax = 0;
	for( $i = 0 ; $i < $longitud ; $i++) {
		$masTemporal = $arrayPalabras[$i];
		for ($j = $i ; $j <  $longitud ; $j++) {
			if ($masTemporal == $arrayPalabras[$j]) {
				$contadorTemporal++;
			}
		}
       	if ($contadorTemporal > $contadorMax) {
			$contadorMax = $contadorTemporal;
			$palabrasMasRepetida = $masTemporal;
		}	
        $contadorTemporal = 0;		
	}
	
	$contenido = "<table border = '1px solid black'>
	<tr><td>Numero de palabras:</td> <td> <input type = 'text' value = '$numeroDePalabras'</td></tr>";
	$contenido .= "<tr><td>Longitud del texto:</td> <td><input type = 'text' value = '$longitudTexto'</td></tr>";
	$contenido .= "<tr><td>Palabra mas repetida : </td> <td> <input type = 'text' value = '$palabrasMasRepetida'</td></tr>";
	$contenido .= "<tr><td>Veces que ha aparecido la palabra:</td><td>$contadorMax</td></tr>";
    $contenido .= "<tr><td>letra mas repetida: </td><td>$letra</td></tr>";
    $contenido.= "</table>";
	return $contenido;
}
echo detallar();

?>