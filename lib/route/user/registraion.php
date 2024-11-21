<?php

include_once('../../functions/userFunction.php');

// Corrected assignment of $result
$result = userRegistration($_POST['username'], $_POST['userEmail'], $_POST['userpass'], $_POST['userphone'], $_POST['userNic']);

// Output the result
echo($result);

?>