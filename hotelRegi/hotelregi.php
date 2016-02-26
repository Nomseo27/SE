<?php

    function smartcounter($strLatestCode){
        $newCode = "";
        if ($strLatestCode == NULL){
            $strNewCode = "0000000001";
        }
        else{
            $chNumValue = str_split($strLatestCode);
	        $intStrLength = strlen($strLatestCode);
	        $blnProof = 0;
            try {
		      for($intCounter = $intStrLength-1; $intCounter > -1; $intCounter--){
			         if(is_numeric($chNumValue[$intCounter]) && $chNumValue[$intCounter] != '9'){
                         $chNumValue[$intCounter]++;
                         $blnProof = 1;
                         break;
			         } 
                  elseif (is_numeric($chNumValue[$intCounter])) {
				        $chNumValue[$intCounter] = '0';
			         } 
                  elseif (!(is_numeric($chNumValue[$intCounter])) && $blnProof == 1) {
				    break;
		          }
	           }
                $strNewCode = implode("", $chNumValue);	
            } catch (Exception $e) {
		      echo "ERROR:". $e.getMessage();
	           }
            }
        if($strLatestCode == $strNewCode){
		$strNewCode = $strNewCode."0";
	   }
        
        return $strNewCode;
    }


      //checks passwords and user and other informations matched the database 
    //decrypts password to check match
    $serverName = "NOMSEO"; //serverName\instanceName

// Since UID and PWD are not specified in the $connectionInfo array,
// The connection will be attempted using Windows Authentication.
$connectionInfo = array( "Database"=>"HOTELDB", "UID"=>"sa", "PWD"=>"mpv08271996");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
        
    $sql= "Select top 1 MemberID FROM MEMBER order by MemberID desc";
    $id = "";
    $stmt = sqlsrv_query($conn, $sql);
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
       $id = $row['MemberID'];  
    }
    
   $id = smartcounter($id);
    sqlsrv_free_stmt( $stmt);

    $params= array(array($id,SQLSRV_PARAM_IN), array($_POST['last_name'],SQLSRV_PARAM_IN), array($_POST['middle_name'],SQLSRV_PARAM_IN), array($_POST['first_name'],SQLSRV_PARAM_IN), array($_POST['join_date'],SQLSRV_PARAM_IN), array($_POST['expiration_date'],SQLSRV_PARAM_IN), array($_POST['user_name'],SQLSRV_PARAM_IN), array($_POST['pass_word'],SQLSRV_PARAM_IN), array($_POST['email'],SQLSRV_PARAM_IN), array($_POST['contact_phone'],SQLSRV_PARAM_IN), array($_POST['address'],SQLSRV_PARAM_IN));

    $stmt = sqlsrv_query($conn,'{CALL SP_Member(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)}', $params);

    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }
    else echo "inserted"
    //if correct redirect to a admin page
   
?>