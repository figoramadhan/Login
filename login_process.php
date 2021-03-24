<?php

$username = $_POST[‘username’];
$password = $_POST[‘password’];
if ($username == ‘Figo’ && $password == ‘Distori4’) {
echo ‘<h1>Login succeeds</h1>’;
} else {
echo ‘<h1>Login fails</h1>’;
}

?>