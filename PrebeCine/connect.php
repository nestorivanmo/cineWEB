<?php

$user = 'root';
$pass = '';
$db = 'PrebeCine';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

echo "Great work !";	

?>