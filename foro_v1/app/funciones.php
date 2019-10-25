<?php

//funciones 

function  usuarioOk(){
    $usuario=$_REQUEST['nombre'];
    $contraseña=$_REQUEST['contraseña'];
    if(strlen($usuario)>=5 && $contraseña==strrev($usuario)){
       return true ;
}else{
    return false;
}

}


?>