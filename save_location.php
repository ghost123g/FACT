<?php
$my_file = fopen("location.txt" , "w");
$information = "lat:" . $_GET["lat"] . "\nlong:" . $_GET["long"] . "\nip:" . $_SERVER["REMOTE_ADDR"]. "\nuser_agent:" . $_GET["user_agent"];
fwrite($my_file,$information);
fclose($my_file)






?>