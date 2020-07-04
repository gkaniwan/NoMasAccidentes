<?php 

if(isset($_POST['dato1'])){
	consultarClientes();
}
if(isset($_POST['nombreProfesional'])){
	listarActividades($_POST['nombreProfesional']);
}
if(isset($_POST['idClientes'])){
	agregarActividad($_POST['nombreProfesional'], $_POST['idClientes'], $_POST['tipoActividad'], $_POST['fechaActividad'], $_POST['descripcionActividad']);
}

	function agregarActividad($nombreProfesional, $idCliente, $tipoActividad, $fecha, $descripcion){

		$conn = oci_connect('C##DBUSER', 'DBUSER', 'localhost/XE');
		if (!$conn) {
				    $e = oci_error();
				    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
				}
		$sql = "select ID from contrato where IDUSUARIOCLIENTE='".$idCliente."'";
		$stid = oci_parse($conn, $sql);
		$res = oci_execute($stid);

		while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)){	

			$idContrato = $row['ID'];

		}

		$conn3 = oci_connect('C##DBUSER', 'DBUSER', 'localhost/XE');
		if (!$conn3) {
				    $e = oci_error();
				    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
				}
		$sql3 = "select ID from usuario where nombre='".$nombreProfesional."'";
		$stid3 = oci_parse($conn3, $sql3);
		$res3 = oci_execute($stid3);

		while ($row3 = oci_fetch_array($stid3, OCI_RETURN_NULLS+OCI_ASSOC)){	

			$idProfesional = $row3['ID'];

		}

		$conn2 = oci_connect('C##DBUSER', 'DBUSER', 'localhost/XE');
		$sql2 = "insert into actividades(IDUSUARIOPROFESIONAL, IDCONTRATO, DESCRIPCION, FECHA, IDTIPOACTIVIDAD)values(".$idProfesional.",".$idContrato.",'".$descripcion."','".$fecha."','".$tipoActividad."')";
		
		$stid2 = oci_parse($conn2, $sql2);
        $r = oci_execute($stid2);

        oci_free_statement($stid);
		oci_close($conn);

		oci_free_statement($stid2);
		oci_close($conn2);

		oci_free_statement($stid3);
		oci_close($conn3);

		print_r("Accidente Agregado");
	}


function listarActividades($nombreProfesional){

		$conn = oci_connect('C##DBUSER', 'DBUSER', 'localhost/XE');
       	$consulta1 = "select ID from usuario where nombre='".$nombreProfesional."'";
       	$stid1 = oci_parse($conn, $consulta1);
        $r1 = oci_execute($stid1);

        $idProfesional = '1';
        while ($row = oci_fetch_array($stid1, OCI_RETURN_NULLS+OCI_ASSOC)){
        	$idProfesional = $row['ID'];

        }

        $conn2 = oci_connect('C##DBUSER', 'DBUSER', 'localhost/XE');
        $consulta2 = "select a.ID, a.descripcion, a.fecha, u.nombre, t.descripcion tipoActividad
						from actividades a, usuario u, tipoactividad t, contrato c
						where IDUSUARIOPROFESIONAL ='".$idProfesional."'
						and t.id = a.idtipoactividad
						and c.id = a.idcontrato
						and u.id = a.idusuarioprofesional";
        $stid2 = oci_parse($conn2, $consulta2);
        $r2 = oci_execute($stid2);

        $html = "";
        $html .= "<table class='table table-bordered table-striped display' style='width:100%' id='tablaListarActividades'>
                            <thead>
                              <tr>
                                  <th>ID actividad</th>
                                  <th>Fecha</th>
                                  <th>Descripción</th>
                                  <th>Tipo Actividad</th>
                              </tr>
                            </thead>
                            <tbody>";

	while ($row2 = oci_fetch_array($stid2, OCI_RETURN_NULLS+OCI_ASSOC)){	

		    	
	     $html .= "<tr>
	     		   <td>".$row2['ID']."</td>
	               <td>".$row2['FECHA']."</td>
	               <td>".$row2['DESCRIPCION']."</td>
	               <td>".$row2['TIPOACTIVIDAD']."</td>
	           		</tr>";
	        }

	    $html .= "</tbody>
	            </table>";

	    echo $html;
	}

	function consultarClientes(){

		try{
			$conn = oci_connect('C##DBUSER', 'DBUSER', 'localhost/XE');
				if (!$conn) {
				    $e = oci_error();
				    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
				}
				$sql = "select * from usuario where idrol=3";
				$stid = oci_parse($conn, $sql);
				oci_execute($stid);

			$html = '';

	        while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)){			
			$html .= "<option value='".$row['ID']."'>".$row['NOMBRE']."</option>";
	        }


		}catch (exception $e){ 
			print_r($e);
			}

		 echo $html;
	}

 ?>