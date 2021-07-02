<?php
    extract($_REQUEST);
    $file=fopen("form-save.txt","a");

    fwrite($file,"Username :");
    fwrite($file, $Username ."\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"Password :");
    fwrite($file, $Password ."\n");
    fwrite($file, "\n");
    fwrite($file, "--------");
    fwrite($file, "\n");
    fclose($file);
    header("location: index.php");
 ?>
