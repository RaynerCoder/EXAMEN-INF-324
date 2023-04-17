<?php

SESSION_START();

if(isset($_SESSION["dato2_usuario"])){

    $usuario = $_SESSION["dato2_usuario"];

    echo 
    "<html>
        <body>
            
            <h3>Usuario: $usuario</h3>
            <a href='../datos personales/index.php'>Volver</a>
            </br>
            </br>
    
        </body>
    </html>
    ";
    
    include"conexion.inc.php";

}
else {
    echo "Sesion Cerrada";
    echo "</br></br><a href='../index.php'>Iniciar Sesion</a>";
}

?>