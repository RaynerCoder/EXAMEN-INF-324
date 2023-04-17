<?php 

SESSION_START();

if(isset($_SESSION["dato2_usuario"])){
    $ci = $_SESSION["dato1_ci"];
    $usuario = $_SESSION["dato2_usuario"];
    
    echo 
    "<html>
        <body>
            
            <h3>CI: $ci</h3>
            <h3>Usuario: $usuario</h3>
    
            <a href='../datos personales/index.php'>Ver Datos Personales</a>
            </br>
            </br>
            <a href='../cerrar sesion/index.php'>Salir</a>
    
        </body>
    </html>
    ";
}
else {
    echo "Sesion Cerrada";
    echo "</br></br><a href='../index.php'>Iniciar Sesion</a>";
}

?>

