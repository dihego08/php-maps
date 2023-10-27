<?php
header('Access-Control-Allow-Origin: *');
//header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
/*header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");*/

include('db.php');


$accion = $_GET['accion'];
if($accion == "listar_ubicaciones"){
    /*$UserEmail = $decodedData['Email'];
    $UserPW = ($decodedData['Password']); //password is hashed*/
    
    $SQL = "SELECT * FROM locations";
    $exeSQL = mysqli_query($conn, $SQL);
    $checkEmail =  mysqli_num_rows($exeSQL);
    
    while ($row = mysqli_fetch_assoc($exeSQL)) {
        $response[] = $row;
    }
    
    
    echo json_encode($response);
}