<?php
session_start();

if(session_unset())
{
header("Location: http://localhost/clg/log.php");
}
?>