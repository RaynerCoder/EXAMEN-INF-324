<?php
//CONEXION
$conexion = mysqli_connect("localhost", "usuario2", "123456");
mysqli_select_db($conexion, "bd_alcides");

//DATOS INGRESADO EN EL LOGIN
$usser = $_POST["usuario"];
$passw = $_POST["pasword"];
//Es un if ternario -> condicion ? por verdad : por false
$tipoUsuario = (isset($_POST['tipoUsuario'])) ? $_POST['tipoUsuario'] : "";

//CONSULTA
$sql = "select * 
        from usuario
        where usuario = '".$usser."'".
        "and pasword = '".$passw."'";

//RESULTADO
$resultado = mysqli_query($conexion, $sql);

//VERIFICACION DEL USUARIO
try {
    $fila = mysqli_fetch_array($resultado);

    if($fila != 0 && $tipoUsuario == $fila["rol"]){

        //INICIO SESION
        SESSION_START();
        $_SESSION["dato1_ci"] = $fila["ci"];
        $_SESSION["dato2_usuario"] = $fila["usuario"];
        $_SESSION["dato3_tipoUsuario"] = $tipoUsuario;    

        header("Location: usuario/index.php"); //header("location: mipagina.php?var1=$var1&var2=$var2&var3=$var3");
        
    }
    else {
        header("Location: index.php"); 
    }
}
catch (Exception $error){
    mysqli_close($conexion);
}


?>