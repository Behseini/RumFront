<?php
session_start();
if (!$_SESSION['captchcode'] == $_POST['captchcode']){
    echo '<div> You Select Wrong Captca</div>';
}
else{

    function getRealIpAddr()
{
            if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
            {
              $ip=$_SERVER['HTTP_CLIENT_IP'];
            }
            elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
            {
              $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
            }
            else
            {
              $ip=$_SERVER['REMOTE_ADDR'];
            }
            return $ip;
}
  	$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "INSERT INTO users (usertitle, username, userlastname, userbyear, userbmonth, userbday, useremail, userbuzz, userbuildingno, userstreetno, userstreetname, usercity, userpostalcode, userpass, isactive, ip, registeredat, comment) VALUES (?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    if($stmt = $mysqli->prepare($sql)){
    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("sssssssssssssssss", $usertitle, $username, $userlastname, $userbyear, $userbmonth, $userbday, $useremail, $userbuzz, $userbuildingno, $userstreetno, $userstreetname, $usercity, $userpostalcode, $userpass, $isactive, $ip, $registeredat,  $comment);

    /* Set the parameters values and execute the statement again to insert another row */


    $usertitle      = $_POST['usertitle'];
    $username       = $_POST['username'];
    $userlastname   = $_POST['userlastname'];
    $userbyear      = $_POST['userbyear'];
    $userbmonth     = $_POST['userbmonth'];
    $userbday       = $_POST['userbday'];
    $useremail      = $_POST['useremail'];
    $userbuzz       = $_POST['userbuzz'];
    $userunit       = $_POST['userunit'];
    $userbuildingno = $_POST['userbuildingno'];
    $userstreet     = $_POST['userstreet'];
    $usercity       = $_POST['usercity'];
    $userpostalcode = $_POST['userpostalcode'];
    $userpass       = $_POST['userpass'];
    $isconfirmed =    0;
    $isactive = 0;
    $ip = getRealIpAddr();
    $registeredat = NULL;
    $comment = NULL;

    $stmt->execute();

    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
}

// Close statement
$stmt->close();

// Close connection
$mysqli->close();
}
