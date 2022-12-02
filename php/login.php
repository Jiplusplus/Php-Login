<?php
$scrivi = fopen("registazione.txt", "a");
fwrite($scrivi, $_POST["username"]);
fclose($scrivi);
echo "registrazione con successo";
?>