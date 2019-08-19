<?php

$ctx=$_POST['postsend'];
$filename="wnote.txt";
$handle=fopen($filename,"w");
$str=fwrite($handle,$ctx);
fclose($handle);

?>