<?php

session_start();
$_SESSION = array();
session_unset();
session_destroy();
echo "Logged out";