<?php
include "conexion.php";
$pdo = new conexion();

//MOSTRAR (GET)
if($_SERVER["REQUEST_METHOD"]=="GET"){
    
	if (isset($_GET["ci"])){
		$sql = $pdo->prepare("select * from persona where ci=:ci");
		$sql->bindValue(":ci", $_GET["ci"]);
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);
		header("HTTP/1.1 200 OK");
		echo json_encode($sql->fetchAll());
		exit;
	}
	else {
	    $sql=$pdo->prepare("select * from persona");
	    $sql->execute();
	    $sql->setFetchMode(PDO::FETCH_ASSOC);
	    header("HTTP/1.1 200 OK");
	    echo json_encode($sql->fetchAll());
	    exit;    		
	}
}

//INSERTAR (POST)
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $sql = $pdo->prepare("
        insert into persona (ci, nombre_completo, fecha_naci, telefono, cod_depart) 
        values (:ci, :nombreCompleto, :fechaNaci, :telefono, :codDepart)");
    
    $sql->bindValue(":ci", $_POST["dato1_ci"]); 
    $sql->bindValue(":nombreCompleto", $_POST["dato2_nombre"]);   
    $sql->bindValue(":fechaNaci", $_POST["dato3_fechaNaci"]);   
    $sql->bindValue(":telefono", $_POST["dato4_telefono"]);   
    $sql->bindValue(":codDepart", $_POST["dato5_codDepart"]);      
    $sql->execute();

    header("HTTP/1.1 200 OK");
    echo json_encode($sql->fetchAll());
    exit;
    
}


//MODIFICAR (PUT)
if($_SERVER["REQUEST_METHOD"]=="PUT"){
    
    $sql = $pdo->prepare("
        update persona set  
        nombre_completo = :nombreCompleto, 
        fecha_naci = :fechaNaci, 
        telefono = :telefono, 
        cod_Depart = :codDepart
        where ci = :ci");
    
    $sql->bindValue(":ci", $_GET["dato1_ci"]); 
    $sql->bindValue(":nombreCompleto", $_GET["dato2_nombre"]);   
    $sql->bindValue(":fechaNaci", $_GET["dato3_fechaNaci"]);   
    $sql->bindValue(":telefono", $_GET["dato4_telefono"]);   
    $sql->bindValue(":codDepart", $_GET["dato5_codDepart"]);      
    $sql->execute();

    header("HTTP/1.1 200 OK");
    exit;
}

//ELIMINAR (DELETE)
if($_SERVER["REQUEST_METHOD"]=="DELETE"){
    
    $sql = $pdo->prepare("delete from persona where ci = :ci");
    $sql->bindValue(":ci", $_GET["dato1_ci"]);     
    $sql->execute();

    header("HTTP/1.1 200 OK");
    exit;
}

?>