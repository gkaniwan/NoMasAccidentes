<?php 

if(isset($_POST['dato1'])){
	buscarRubros();
}
if(isset($_POST['dato2'])){
	agregarRubro($_POST['IDRubro'], $_POST['Tipo']);
}
if(isset($_POST['dato3'])){
	borrarRubro($_POST['IDRubro']);
}
if(isset($_POST['dato4'])){
	mostrarActualizarRubro($_POST['IDRubro']);
}
if(isset($_POST['dato5'])){
	actualizarRubro($_POST['IDRubro'], $_POST['Tipo']);
}
if(isset($_POST['dato6'])){
	verUltimoId();
}

	function verUltimoId(){
		try{

			$cone = new mysqli("127.0.0.1", "root", "", "nomasaccidentes");
			$sql1 = "SELECT MAX(IDRubro) AS ID FROM Rubro";
			
		if ($resultado = $cone->query($sql1)) { 				    

			while ($fila = $resultado->fetch_assoc()) {

				$dato = $fila['ID'];

	        }

		    $resultado->free();
		}

		mysqli_close($cone);

		}catch (exception $e){ 
			print_r($e);
			}

		echo intval($dato) + 1;

	}

	function actualizarRubro($IDRubro, $tipo){

		try{

			$cone = new mysqli("127.0.0.1", "root", "", "nomasaccidentes");
			$sql = "UPDATE Rubro SET Tipo='".$tipo."' WHERE IDRubro=".$IDRubro."";

			$res = $cone->query($sql);  				    
	    	$cone->close();

		}catch(exception $e){
			print_r($e);
		}
		
		echo 'OK';

	}

	function mostrarActualizarRubro($IDRubro){

		try{

			$mysqli = new mysqli("127.0.0.1", "root", "", "nomasaccidentes");
			$sql = "select * FROM `Rubro` WHERE IDRubro = ".$IDRubro."";
				    
	    	$datos = array();

	    	if ($resultado = $mysqli->query($sql)) { 				    

				while ($fila = $resultado->fetch_assoc()) {

						$result = array();
			            $result['IDRubro'] = $fila['IDRubro'];
			            $result['Tipo'] = $fila['Tipo'];

	            array_push($datos, $result);
	        }
	      }
	        $mysqli->close();

		}catch(exception $e){
			print_r($e);
		}

		echo json_encode($datos);

	}

	function borrarRubro($IDRubro){

		try{

			$cone = new mysqli("127.0.0.1", "root", "", "nomasaccidentes");
			$sql = "DELETE FROM `Rubro` WHERE IDRubro = ".$IDRubro."";

			$res = $cone->query($sql);  				    
	    	$cone->close();

		}catch(exception $e){
			print_r($e);
		}
		
		echo 'OK';

	}

	function agregarRubro($IDRubro, $Tipo){

		try{
			$cone = new mysqli("127.0.0.1", "root", "", "nomasaccidentes");
			$sql = "insert into Rubro(IDRubro, Tipo)values(".$IDRubro.",'".$Tipo."')";

			$res = $cone->query($sql);  				    
	    	$cone->close();

		}catch(exception $e){
			print_r($e);
		}
		
		echo $sql;

	}

	function buscarRubros(){

		try{
			$mysqli = new mysqli("127.0.0.1", "root", "", "nomasaccidentes");

			$consulta = "select * from Rubro";

			$html = '';
    		$html .= "   
	                <table class='table table-bordered table-striped display' style='width:100%' id='tablaListarRubros'>
	                    <thead>
	                      <tr>
	                          <th>ID Rubro</th>
	                          <th>Descripción</th>
	                          <th>Modificar</th>
	                          <th>Eliminar</th>
	                      </tr>
	                    </thead>
	                  <tbody>";

		if ($resultado = $mysqli->query($consulta)) { 				    

			while ($fila = $resultado->fetch_assoc()) {

				$html .= '<tr>
	                        <td>'.$fila['IDRubro'].'</td>
	                        <td>'.$fila['Tipo'].'</td>
	                        <td><button type="button" class="btn btn-info" onclick="verActualizarRubro([\''.$fila['IDRubro'].'\']);">Modificar</button></td>
	                        <td><button type="button" class="btn btn-danger" onclick="borrarRubro([\''.$fila['IDRubro'].'\']);">Eliminar</button></td>
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