<?php

// Conectar al servicio XE (es deicr, la base de datos) en la máquina "localhost"
$conn = oci_connect('C##DBUSER', 'DBUSER', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
$sql = "select * from ROLES";
$stid = oci_parse($conn, $sql);
oci_execute($stid);

 $html = "";
        $html .= "<table id='tablaClientesEncontrados' class='table' style='width:100%' align='center'>
                            <thead>
                             <tr>
                                <th>ID</th>
                                <th>DESCRIPCION</th>
	                          </tr>
	                         </thead>
	                         <tbody>";

	    while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)){			
			$html .= "<tr>
		               <td>".$row['ID']."</td>
		               <td>".$row['DESCRIPCION']."</td>
		              </tr>";
	        }
	         
	        $html .= "</tbody>
	                </table>";

	    echo $html;

?>