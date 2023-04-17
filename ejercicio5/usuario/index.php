<?php 

SESSION_START();

if(isset($_SESSION["dato2_usuario"])){
    $ci = $_SESSION["dato1_ci"];
    $usuario = $_SESSION["dato2_usuario"];
    $tipoUsuario = $_SESSION["dato3_tipoUsuario"]; 
    
    if ($tipoUsuario == 'director'){
        echo "<h3>ROL DIRECTOR</h3>
            <h3>CI: $ci</h3>
            <h3>Usuario: $usuario</h3> 
            <a href='../rol director/index.php'>Visualizar por departamento la media de notas</a></br></br>
            <a href='../cerrar sesion/index.php'>Salir</a>";
    }
    else {
        echo "<h3>ROL ESTUDIANTE</h3>
            <h3>CI: $ci</h3>
            <h3>Usuario: $usuario</h3>        
            <a href='../datos personales/index.php'>Ver Datos Personales</a></br></br>
            <a href='../cerrar sesion/index.php'>Salir</a>";
    }

}
else {
    echo "Sesion Cerrada";
    echo "</br></br><a href='../index.php'>Iniciar Sesion</a>";
}

?>

<!--
if ($tipoUsuario == 'Director'){
        header("Location: ../rol director/index.php");
    }
-->