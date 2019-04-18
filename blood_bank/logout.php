<?php
session_start();

unset($_SESSION['uid']);
unset($_SESSION['utype']);
echo"<script>location.href='index.php';</script>";

?>