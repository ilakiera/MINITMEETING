<?php
session_start();
unset($_SESSION['id']);
session_destroy();

echo "<meta http-equiv=\"refresh\" content=\"0;URL=home.php\"/>";
?>