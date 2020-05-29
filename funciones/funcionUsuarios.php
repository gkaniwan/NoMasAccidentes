<?php 

if(isset($_POST['dato1'])){
	buscarClientes();
}
if(isset($_POST['dato2'])){
	agregarCliente($_POST['rutCliente'], $_POST['nombreCliente'], $_POST['email'], $_POST['contrasena'], $_POST['telefono1'], $_POST['telefono2'], $_POST['direccion'], $_POST['rubro']);
}
if(isset($_POST['dato3'])){
	borrarCliente($_POST['rutCliente']);
}
if(isset($_POST['dato4'])){
	mostrarActualizarCliente($_POST['rutCliente']);
}
if(isset($_POST['dato5'])){
	actualizarCliente($_POST['rutCliente'], $_POST['nombreCliente'], $_POST['email'], $_POST['contrasena'], $_POST['telefono1'], $_POST['telefono2'], $_POST['direccion'], $_POST['rubro']);
}


	function actualizarCliente($rutCliente, $nombreCliente, $email, $contrasena, $telefono1, $telefono2, $direccion, $rubro){

		try{

			$cone = new mysqli("127.0.0.1", "root", "", "nomasaccidentes");
			$sql = "UPDATE cliente SET Nombre='".$nombreCliente."',Email='".$email."',Contrasena='".$contrasena."',TelefonoUno=".$telefono1.",TelefonoDos=".$telefono2.",Direccion='".$direccion."',IDRubro=".$rubro." WHERE RUTCliente=".$rutCliente."";

			$res = $cone->query($sql);  				    
	    	$cone->close();

		}catch(exception $e){
			print_r($e);
		}
		
		echo 'OK';


	}

	function mostrarActualizarCliente($rutCliente){

		try{

			$mysqli = new mysqli("127.0.0.1", "root", "", "nomasaccidentes");
			$sql = "select * FROM `cliente` WHERE RUTCliente = '".$rutCliente."'";
				    
	    	$datos = array();

	    	if ($resultado = $mysqli->query($sql)) { 				    

				while ($fila = $resultado->fetch_assoc()) {


						$result = array();
			            $result['RUTCliente'] = $fila['RUTCliente'];
			            $result['Nombre'] = $fila['Nombre'];
			            $result['Email'] = $fila['Email'];
			            $result['Contrasena'] = $fila['Contrasena'];
			            $result['TelefonoUno'] = $fila['TelefonoUno'];
			            $result['TelefonoDos'] = $fila['TelefonoDos'];
			            $result['Direccion'] = $fila['Direccion'];
			            $result['IDRubro'] = $fila['IDRubro'];

	            array_push($datos, $result);
	        }
	      }
	        $mysqli->close();

		}catch(exception $e){
			print_r($e);
		}

		echo json_encode($datos);

	}



	function borrarCliente($rutCliente){

		try{

			$cone = new mysqli("127.0.0.1", "root", "", "nomasaccidentes");
			$sql = "DELETE FROM `cliente` WHERE RUTCliente = '".$rutCliente."'";

			$res = $cone->query($sql);  				    
	    	$cone->close();

		}catch(exception $e){
			print_r($e);
		}
		
		echo 'OK';

	}


	function agregarCliente($rutCliente, $nombreCliente, $email, $contrasena, $telefono1, $telefono2, $direccion, $rubro){

		try{

			$cone = new mysqli("127.0.0.1", "root", "", "nomasaccidentes");
			$sql = "insert into cliente(RUTCliente, Nombre, Email, Contrasena, TelefonoUno, TelefonoDos, Direccion, InterNombreCom, InterEmail, InterTelefono, IDRubro)values('".$rutCliente."','".$nombreCliente."','".$email."','".$contrasena."','".$telefono1."','".$telefono2."','".$direccion."',' ', ' ', ' ','".$rubro."')";

			$res = $cone->query($sql);  				    
	    	$cone->close();

		}catch(exception $e){
			print_r($e);
		}
		
		echo 'OK';

	}

function buscarClientes(){

		try{
			$mysqli = new mysqli("127.0.0.1", "root", "", "nomasaccidentes");

			$consulta = "select * from cliente";

			$html = '';
    		$html .= "   
	                <table class='table table-bordered table-striped display' style='width:100%' id='tablaListarClientes'>
	                    <thead>
	                      <tr>
	                          <th>Rut cliente</th>
	                          <th>Nombre </th>
	                          <th>Email</th>
	                          <th>Telefono 1</th>
	                          <th>Telefono 2</th>
	                          <th>Dirección</th>
	                          <th>Modificar</th>
	                          <th>Eliminar</th>
	                      </tr>
	                    </thead>
	                  <tbody>";

		if ($resultado = $mysqli->query($consulta)) { 				    

			while ($fila = $resultado->fetch_assoc()) {

				$html .= '<tr>
	                        <td>'.$fila['RUTCliente'].'</td>
	                        <td>'.$fila['Nombre'].'</td>
	                        <td>'.$fila['Email'].'</td>
	                        <td>'.$fila['TelefonoUno'].'</td>
	                        <td>'.$fila['TelefonoDos'].'</td>
	                        <td>'.$fila['Direccion'].'</td>
	                        <td><button type="button" class="btn btn-info" onclick="verActualizarCliente([\''.$fila['RUTCliente'].'\']);">Modificar</button></td>
	                        <td><button type="button" class="btn btn-danger" onclick="borrarCliente([\''.$fila['RUTCliente'].'\']);">Eliminar</button></td>
	                    </tr>';
	        }

			$html .= "</tbody>
		            </table>
		          </body>"; 

	       	/* liberar el conjunto de resultados */
		    $resultado->free();
		}
		/* close connection */
		mysqli_close($mysqli);

		}catch (exception $e){ 
			print_r($e);
			}

		 echo $html;
	}




	





 ?>