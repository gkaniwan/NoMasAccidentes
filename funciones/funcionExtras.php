<?php 

if(isset($_POST['dato1'])){
	buscarExtras();
}
if(isset($_POST['dato2'])){
	agregarExtras($_POST['IDACTIVIDAD'], $_POST['VALOR']);
}
// if(isset($_POST['dato3'])){
// 	borrarRubro($_POST['IDRubro']);
// }
// if(isset($_POST['dato4'])){
// 	mostrarActualizarRubro($_POST['IDRubro']);
// }
// if(isset($_POST['dato5'])){
// 	actualizarRubro($_POST['IDRubro'], $_POST['Tipo']);
// }
// if(isset($_POST['dato6'])){
// 	verUltimoId();
// }

	function buscarExtras(){

		try{
			$conn = oci_connect('C##DBUSER', 'DBUSER', 'localhost/XE');
				if (!$conn) {
				    $e = oci_error();
				    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
				}
				$sql = "select * from extras";
				$stid = oci_parse($conn, $sql);
				oci_execute($stid);
				$datos = array();

	        while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)){			
			
						$result = array();
			            $result['ID'] = $row['ID'];
			            $result['VALOR'] = $row['VALOR'];
			            $result['IDACTIVIDAD'] = $row['IDACTIVIDAD'];

			        array_push($datos, $result);  
	        }

		}catch (exception $e){ 
			print_r($e);
			}

			echo json_encode($datos);
	}

	// function verUltimoId(){
	// 	try{

	// 		$cone = new mysqli("127.0.0.1", "root", "", "nomasaccidentes");
	// 		$sql1 = "SELECT MAX(IDRubro) AS ID FROM Rubro";
			
	// 	if ($resultado = $cone->query($sql1)) { 				    

	// 		while ($fila = $resultado->fetch_assoc()) {

	// 			$dato = $fila['ID'];

	//         }

	// 	    $resultado->free();
	// 	}

	// 	mysqli_close($cone);

	// 	}catch (exception $e){ 
	// 		print_r($e);
	// 		}

	// 	echo intval($dato) + 1;
	// }

	// function actualizarRubro($IDRubro, $tipo){

	// 	try{

	// 		$cone = new mysqli("127.0.0.1", "root", "", "nomasaccidentes");
	// 		$sql = "UPDATE Rubro SET Tipo='".$tipo."' WHERE IDRubro=".$IDRubro."";

	// 		$res = $cone->query($sql);  				    
	//     	$cone->close();

	// 	}catch(exception $e){
	// 		print_r($e);
	// 	}
		
	// 	echo 'OK';

	// }

	// function mostrarActualizarRubro($IDRubro){

	// 	try{
	// 		$conn = oci_connect('C##DBUSER', 'DBUSER', 'localhost/XE');
	// 			if (!$conn) {
	// 			    $e = oci_error();
	// 			    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
	// 			}
	// 			$sql = "select * FROM ROLES WHERE ID = ".$IDRubro."";
	// 			$stid = oci_parse($conn, $sql);
	// 			oci_execute($stid);

	// 			$datos = array();

	//         while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)){			
				
	// 					$result = array();
	// 		            $result['IDRubro'] = $row['ID'];
	// 		            $result['Tipo'] = $row['DESCRIPCION'];

	// 		        array_push($datos, $result);    
	//         }

	// 	}catch (exception $e){ 
	// 		print_r($e);
	// 		}

	// 	echo json_encode($datos);
	// }

	// function borrarRubro($IDRubro){

	// 	try{

	// 		$cone = new mysqli("127.0.0.1", "root", "", "nomasaccidentes");
	// 		$sql = "DELETE FROM `Rubro` WHERE IDRubro = ".$IDRubro."";

	// 		$res = $cone->query($sql);  				    
	//     	$cone->close();

	// 	}catch(exception $e){
	// 		print_r($e);
	// 	}
		
	// 	echo 'OK';

	// }

	// function agregarRubro($IDRubro, $Tipo){

	// 	try{
	// 		$cone = new mysqli("127.0.0.1", "root", "", "nomasaccidentes");
	// 		$sql = "insert into Rubro(IDRubro, Tipo)values(".$IDRubro.",'".$Tipo."')";

	// 		$res = $cone->query($sql);  				    
	//     	$cone->close();

	// 	}catch(exception $e){
	// 		print_r($e);
	// 	}
		
	// 	echo $sql;

	// }


 ?>