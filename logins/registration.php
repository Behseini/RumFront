<?php
if (!$_SESSION['captach_dates'] == $_POST['captach_dates']){
    echo '<div> You Select Wrong Captca</div>';
}
else{
    echo '<div> You Select Correct Captca</div>';
}
