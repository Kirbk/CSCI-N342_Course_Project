<?php
    session_start();
    $_SESSION['aid'] = NULL;
    $_SESSION['uname'] = NULL;
    if ($_SESSION['aid'] == NULL) {
      session_destroy();
      Header ("Location:login.php");
    }
?>