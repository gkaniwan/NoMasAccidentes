<?php 

if(isset($_POST['email'])){
	loguear($_POST['email'], $_POST['password']);
}


	function loguear($email, $password){

		try{
			$conn = oci_connect('C##DBUSER', 'DBUSER', 'localhost/XE');
				if (!$conn) {
				    $e = oci_error();
				    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
				}
				$sql = "SELECT * FROM USUARIO WHERE MAIL='".$email."' AND PASSWORD='".$password."'";
				$stid = oci_parse($conn, $sql);
				oci_execute($stid);

				$datos = array();

	        while ($row = oci_fetch_array($stid, OCI_RETURN_NULLS+OCI_ASSOC)){			
				
						$result = array();
			            $result['IDROL'] = $row['IDROL'];
			            $result['NOMBRE'] = $row['NOMBRE'];
			            $result['ID'] = $row['ID'];

			        array_push($datos, $result);    
	        }

		}catch (exception $e){ 
			print_r($e);
			}

		echo json_encode($datos);
	}

 ?>