<?php
    //checks passwords and user and other informations matched the database 
    //decrypts password to check match
    $serverName = "NOMSEO"; //serverName\instanceName

// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.
$connectionInfo = array( "Database"=>"HOTELDB");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}

    
    //if correct redirect to a admin page
    header("Location: application/home.php");
?>