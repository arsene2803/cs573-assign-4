
<?php

    $file = $_POST['file'];
    $participant_ID=$_POST['ID'];
    $file_handle =  fopen("n_".$participant_ID.".csv", "w") or die("Unable to open file!");
    fwrite($file_handle,$file );
    fclose($file_handle);

?>
