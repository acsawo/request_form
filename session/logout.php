<?php
    session_start();
    error_reporting(E_ALL & ~E_NOTICE);
    unset($_SESSION[ses_userid]);
    unset($_SESSION[ses_user]);

    echo "<meta http-equiv ='refresh' content = '1; URL = login.php' />";    
?>