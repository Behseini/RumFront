
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Rumi Optical - Account Activation Page</title>
      <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
      <style>

      html, body {
  height:100%;
}
body {
  display:flex;
  align-items:center;
}
          h4{
              font-family: 'Montserrat', sans-serif;
              text-transform: capitalize;
              letter-spacing: 1px;
              color: #666;
          }            p{
              font-weight: 500;
              font-family: 'Montserrat', sans-serif;
              text-transform: capitalize;
              letter-spacing: 1px;
              color: #888;
          }
      </style>
  </head>
  <body>

<div class="container h-100">
    <div class="row align-items-center h-100">
        <div class="col-6 mx-auto">
            <div class="jumbotron text-center">
               <?php
if (isset($_GET['email'], $_GET['code'])) {
    require_once "config.php";
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($stmt = $conn->prepare('SELECT * FROM users WHERE useremail = ? AND token = ? AND isconfirmed= 0')) {
        $stmt->bind_param('ss', $_GET['email'], $_GET['code']);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
                 $stmt = $conn->prepare('UPDATE users SET isconfirmed = 1 WHERE useremail = ? AND token = ?');
                 $stmt->bind_param("ss", $_GET['email'], $_GET['code']);
                 $stmt->execute();
               echo "Your account has been activated successfully. You can now login.";
            ?>
                    <h4><strong>Rumi Optical</strong></h4>
                 <br />
                <button type="button" class="btn btn-success rounded-circle" style="padding-top:10px; padding-bottom:10px;"> <i data-feather="check"></i></button>
               <br />
               <br />
                <p class="text-success"><strong>Congradulation!</strong></p>
                <p>Your account has been created</p>
                <br />
                <button type="button" class="btn btn-success">Login to Your Account</button>
                <?php
        }
        else {
     		echo '';
             ?>
                <h4><strong>Rumi Optical</strong></h4>
                 <br />
                <button type="button" class="btn btn-warning rounded-circle" style="padding-top:10px; padding-bottom:10px;"> <i data-feather="sunrise"></i></button>
               <br />
               <br />
                <p>This account is already activated or doesn't exist!</p>
                <br />
                <button type="button" class="btn btn-info">Visit Rumi Optical</button>
                <?php
		}
    }
    else {
		echo 'Wrong Request';
		}


}
else{
               ?>
                <h4><strong>Rumi Optical</strong></h4>
                 <br />
                <button type="button" class="btn btn-danger rounded-circle" style="padding-top:10px; padding-bottom:10px;"> <i data-feather="trending-down"></i></button>
               <br />
               <br />
                <p>You are in wrong plave bro!</p>
           <br />
                <button type="button" class="btn btn-info">Visit Rumi Optical</button>
                <?php
}




?>

            </div>
        </div>
    </div>
</div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <script src="https://unpkg.com/feather-icons"></script>
      <script>
      feather.replace()
    </script>
  </body>
</html>
