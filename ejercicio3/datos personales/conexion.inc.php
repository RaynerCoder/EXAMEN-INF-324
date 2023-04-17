<?php
 
$ci = $_SESSION["dato1_ci"];

//CONEXION
$conexion = mysqli_connect("localhost", "usuario2", "123456");
mysqli_select_db($conexion, "bd_alcides");


//CONSULTA
$sql = "select * 
        from persona
        where ci = '".$ci."'";

//RESULTADO
$resultado = mysqli_query($conexion, $sql);

?>


<table border="1px">
	<tr>
		<td>CI</td>
		<td>NOMBRE COMPLETO</td>
		<td>FECHA DE NACIMIENTO</td>
		<td>TELEFONO</td>
        <td>DEPARTAMENTO</td>
	</tr>

<?php
    
    while ($fila = mysqli_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>".$fila["ci"]."</td>";
        echo "<td>".$fila["nombre_completo"]."</td>";
        echo "<td>".$fila["fecha_naci"]."</td>";
        echo "<td>".$fila["telefono"]."</td>";
        echo "<td>".$fila["cod_depart"]."</td>";
        echo "<td>";
    }
	
?>	

</table>


