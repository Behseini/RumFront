<?php
require_once "config.php";
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
if (isset($_GET['email'], $_GET['code'])) {
    if ($stmt = $conn->prepare('SELECT * FROM users WHERE useremail = ? AND token = ?')) {
        $stmt->bind_param('ss', $_GET['email'], $_GET['code']);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
                    $stmt = $conn->prepare('UPDATE users SET isconfirmed = ? WHERE useremail = ? AND token = ?');
                    $stmt->bind_param("iss", 1, $_GET['email'], $_GET['code']);
                    $stmt->execute();
        }
        else {
     		echo 'The account is already activated or doesn\'t exist!';
		}
        } else {
     		echo 'Wrong Request';
		}

    }
        $stmt->close();
        $conn->close();

?>
