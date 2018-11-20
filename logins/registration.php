<?php
session_start();
if (!$_SESSION['captchcode'] == $_POST['captchcode']){
    echo '<div> You Select Wrong Captca</div>';
}
else{
    echo '<div> You Select Correct Captca</div>';
}
