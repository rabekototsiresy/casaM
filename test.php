<?php

$flash=  "message flash";
$_SESSION['flash'] = $flash;
echo $_SESSION['flash'];

unset($_SESSION['flash']);