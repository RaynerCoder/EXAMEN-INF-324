<?php
 
$ci = $_SESSION["dato1_ci"];

//CONEXION
$conexion = mysqli_connect("localhost", "usuario2", "123456");
mysqli_select_db($conexion, "bd_alcides");


//CONSULTA
$sql = "select * 
        from inscripcion
        where ci = '".$ci."'";

//RESULTADO
$resultado = mysqli_query($conexion, $sql);

?>


<table border="1px">
	<tr>
		<td>CI ESTUDIANTE</td>
		<td>SIGLA</td>
		<td>NOTA 1</td>
		<td>NOTA 2</td>
        <td>NOTA 3</td>
        <td>NOTA FINAL</td>
	</tr>

<?php
    
    while ($fila = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>".$fila["ci"]."</td>";
        echo "<td>".$fila["sigla"]."</td>";
        echo "<td>".$fila["nota1"]."</td>";
        echo "<td>".$fila["nota2"]."</td>";
        echo "<td>".$fila["nota3"]."</td>";
        echo "<td>".$fila["notaFinal"]."</td>";
        echo "</tr>";
    }
	
?>	

</table>


