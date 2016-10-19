
<?php
    $participantID=$_GET['ID'];
    $vis=$_GET['vis'];
    $reportedError=$_GET['reportedError'];
    $truePercent=$_GET['truePercent'];
    $error=$_GET['error'];

    $file_handle =  fopen("master.csv", "r+") or die("Unable to open file!");

    $row = 0;
    while (($data = fgetcsv($file_handle, 1000, ",")) !== FALSE) {
        $row++;
    }

    $list = array ($participantID,$row,$vis,$reportedError,$truePercent,$error);
    fputcsv($file_handle, $line); 
    fclose($file_handle);
    
   
?>
