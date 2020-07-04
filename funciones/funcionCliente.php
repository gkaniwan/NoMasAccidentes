<?php 


if(isset($_POST['clienteAccidente'])){
	agregarActividad($_POST['clienteAccidente'], $_POST['fechaAccidente'], $_POST['descripcionAccidente']);
}
if(isset($_POST['nombreCliente'])){
	listarAccidentes($_POST['nombreCliente']);
}



	function agregarActividad($nombreCliente, $fecha, $descripcion){

		$conn = oci_connect('C##DBUSER', 'DBUSER', 'localhost/XE');
		if (!$conn) {
				    $e = oci_error();
				    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
				}
		$sql = "select c.id IDCONTRATO, u.id IDUSUARIO from contrato c, usuario u where u.nombre='".$nombreCliente."' and c.idusuariocliente = u.id";
		$stid = oci_parse($conn, $sql);
		$res = oci_execute($stid);
		$idCliente = '1';
		$idContrato = '2';

		while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)){	

			$idCliente = $row['IDUSUARIO'];
			$idContrato = $row['IDCONTRATO'];

		}

		$conn2 = oci_connect('C##DBUSER', 'DBUSER', 'localhost/XE');
		$sql2 = "insert into accidentes(IDUSUARIOCLIENTE, IDCONTRATO, FECHA, DESCRIPCION)values(".$idCliente.",".$idContrato.",'".$fecha."','".$descripcion."')";
		
		$stid2 = oci_parse($conn2, $sql2);
        $r = oci_execute($stid2);

        oci_free_statement($stid);
		oci_close($conn);

		oci_free_statement($stid2);
		oci_close($conn2);

		print_r("Accidente Agregado");
	}



	function listarAccidentes($nombreCliente){

		$conn = oci_connect('C##DBUSER', 'DBUSER', 'localhost/XE');
       	$consulta1 = "select ID from usuario where nombre='".$nombreCliente."'";
       	$stid1 = oci_parse($conn, $consulta1);
        $r1 = oci_execute($stid1);


        while ($row = oci_fetch_array($stid1, OCI_RETURN_NULLS+OCI_ASSOC)){
        	$idCliente = $row['ID'];

        }

        $conn2 = oci_connect('C##DBUSER', 'DBUSER', 'localhost/XE');
        $consulta2 = "select a.ID, a.FECHA, a.DESCRIPCION from accidentes a where IDUSUARIOCLIENTE='".$idCliente."'";
        $stid2 = oci_parse($conn2, $consulta2);
        $r2 = oci_execute($stid2);

        $html = "";
        $html .= "<table class='table table-bordered table-striped display' style='width:100%' id='tablaListarAccidentes'>
                            <thead>
                              <tr>
                                  <th>ID Accidente</th>
                                  <th>Fecha</th>
                                  <th>Descripción</th>
                              </tr>
                            </thead>
                            <tbody>";

	while ($row2 = oci_fetch_array($stid2, OCI_RETURN_NULLS+OCI_ASSOC)){	

		    	
	     $html .= "<tr>
	     		   <td>".$row2['ID']."</td>
	               <td>".$row2['FECHA']."</td>
	               <td>".$row2['DESCRIPCION']."</td>
	           		</tr>";
	        }

	    $html .= "</tbody>
	            </table>";

	    echo $html;
	}

	
 ?>