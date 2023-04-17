<table border="1px">
	<tr>
		<td>LA PAZ</td>
		<td>ORURO</td>
		<td>COCHABAMBA</td>
		<td>SANTA CRUZ</td>
        <td>POTOSI</td>
        <td>CHUQUISACA</td>
        <td>TARIJA</td>
        <td>BENI</td>
        <td>PANDO</td>
	</tr>


<?php
SESSION_START();

if(isset($_SESSION["dato2_usuario"])){
    $ci = $_SESSION["dato1_ci"];
    $usuario = $_SESSION["dato2_usuario"];
    $tipoUsuario = $_SESSION["dato3_tipoUsuario"]; 


    //CONEXION
    $conexion = mysqli_connect("localhost", "usuario2", "123456");
    mysqli_select_db($conexion, "bd_alcides");

    //CONSULTA
    $sql = "select 
    sum(case when x.cod_depart = '01' then x.media else 0 end) as 'CHQ',
    sum(case when x.cod_depart = '02' then x.media else 0 end) as 'LPZ',
    sum(case when x.cod_depart = '03' then x.media else 0 end) as 'CBA',
    sum(case when x.cod_depart = '04' then x.media else 0 end) as 'ORU',
    sum(case when x.cod_depart = '05' then x.media else 0 end) as 'PTS',
    sum(case when x.cod_depart = '06' then x.media else 0 end) as 'TJA',
    sum(case when x.cod_depart = '07' then x.media else 0 end) as 'SCZ',
    sum(case when x.cod_depart = '08' then x.media else 0 end) as 'BEN',
    sum(case when x.cod_depart = '09' then x.media else 0 end) as 'PDO'
    from 
    (select p.cod_depart, sum(r.notaFinal)/count(*) as media
    from persona p, inscripcion r
    where p.ci = r.ci
    group by p.cod_depart) x";

    //RESULTADO
    $resultado = mysqli_query($conexion, $sql); 

    while ($fila = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>".$fila["LPZ"]."</td>";
        echo "<td>".$fila["ORU"]."</td>";
        echo "<td>".$fila["CBA"]."</td>";
        echo "<td>".$fila["SCZ"]."</td>";
        echo "<td>".$fila["PTS"]."</td>";
        echo "<td>".$fila["CHQ"]."</td>";
        echo "<td>".$fila["TJA"]."</td>";
        echo "<td>".$fila["BEN"]."</td>";
        echo "<td>".$fila["PDO"]."</td>";
        echo "</tr>";
    }
}
else {
    echo "Sesion Cerrada";
    echo "</br></br><a href='../index.php'>Iniciar Sesion</a>";
}

?>

</table>

<?php

echo "</br></br><a href='../usuario/index.php'>Volver</a>";

?>
