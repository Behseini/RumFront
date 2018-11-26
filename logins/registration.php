<?php
session_start();
if ($_SESSION['captchcode'] == $_POST['captchcode']){
   require_once "config.php";
   $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

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

     $sql = "INSERT INTO users (token, usertitle, username, userlastname, userbyear, userbmonth, userbday, useremail, userphone, userbuzz, userunit, userbuildingno, userstreet, usercity, userpostalcode, userpass, isconfirmed, isactive, ip ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    if($stmt = $conn->prepare($sql)){
    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("sssssssssssssssssss",$token, $usertitle, $username, $userlastname, $userbyear, $userbmonth, $userbday, $useremail, $userphone, $userbuzz, $userunit, $userbuildingno, $userstreet, $usercity, $userpostalcode, $userpass, $isconfirmed, $isactive, $ip);

    /* Set the parameters values and execute the statement again to insert another row */

    $token          = $_POST['token'];
    $usertitle      = $_POST['usertitle'];
    $username       = $_POST['username'];
    $userlastname   = $_POST['userlastname'];
    $userbyear      = $_POST['userbyear'];
    $userbmonth     = $_POST['userbmonth'];
    $userbday       = $_POST['userbday'];
    $useremail      = $_POST['useremail'];
    $userphone      = $_POST['userphone'];
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
    $stmt->execute();

$activate_link = 'http://niazmandiha.ca/wp-content/themes/rumipress/logins/activate.php?email=' . $_POST['useremail'] . '&code=' . $_POST['token'];
$to = $_POST['useremail'];
$subject = "Account Activation Required - Rumi Optical";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <noreply@rumioptical.com>' . "\r\n";
$message = '<html>
  <head>
    <title>Activation email</title>
  </head>
  <body style="padding-top:10px; padding-bottom:30px;">
       <title>Activation email</title>
<div class="box" style="background:#f7f7f7;border-radius:3px; border: 2px solid #888; padding:40px;  max-width: 740px; margin: 0 auto; margin-top:30px;">
      <p><strong>Just one more step to activate your account with Rumi Optoical</strong></p>
      <table>
        <tbody><tr>
          <td style="padding-top:12px; padding-bottom:12px; letter-spacing:1px; color:#355488;"><strong>Dear  '.$_POST['username'].'</strong></td>
          <td></td>
        </tr>
        <tr>
          <td style="padding-top:12px; padding-bottom:12px;">Thanks for signing up with Rumi Optical. You are receiving this email because you are just one step away from activating your account with Rumi Optical. To complete your account registration with us and you need to confirm the registration by clicking on the activation button at below</td>
          <td></td>
        </tr>
        <tr>
          <td style="padding-top:12px; padding-bottom:12px;">Please click the button below to activate your account</td>
          <td></td>
        </tr>
        <tr>
          <td style="padding-top:12px; padding-bottom:12px;"><a role="button" href="'. $activate_link .'" style="margin-bottom:10px; text-decoration: none !important; display: inline-block;   font-weight: 400; letter-spacing:1px;  text-align: center;   white-space: nowrap;   vertical-align: middle;   -webkit-user-select: none;   -moz-user-select: none;   -ms-user-select: none;   user-select: none;   border: 1px solid transparent;   padding: 0.375rem 0.75rem;   font-size: 1rem;   line-height:2.2;   border-radius: 0.25rem;   transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;color: #fff;   background-color: #28a745;   border-color: #28a745;">Active Your Account</a></td>
          <td></td>
        </tr>
                <tr>
          <td>Please do not reply to this message. This email message was sent from a notification-only address that cannot accept any incoming e-mail. If you have any question with using your new loyalty account, please visit us at Rumi Optical for further information and support.</td>
          <td></td>
        </tr>
        <tr>
          <td style="padding-top:12px; padding-bottom:12px;">If you believe this is a mistake and you did not intend on registering to Rumi Optical, Please ignore this message and nothing else will happen</td>
          <td></td>
        </tr>
        <tr>
      </tr></tbody></table>
    </div>
  </body>
</html>';

          if(mail($to,$subject,$message,$headers)){
            echo 'One More Step! We are almost Done! Please check your email to activate your account!';
             $stmt->close();
              $conn->close();

        }
  else{
       echo 'Something Is Wrong With Your Email Address. Can You please check you are using correct email account';
}
 } else{
    echo "ERROR: Could not prepare query: $sql. " . $conn->error;
}

}
else{
echo '<div> Wrong Captcha</div>';
}
