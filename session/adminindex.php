<?php 
    session_start();
    error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Index</title>
</head>
<body>
    <?php
        $ses_userid = $_SESSION[ses_userid];
        $ses_user = $_SESSION[ses_user];
        $ses_login_time_stamp = $_SESSION[login_time_stamp];
        $ses_diff_time = (time() - $ses_login_time_stamp);
        $limit_session = 10; //minute
           
        if(($ses_userid <> SESSION_id())||($ses_user == ""))
        {
                echo "Login Please";
                echo "<meta http-equiv ='refresh' content = '1; URL = login.php' />";
        }else{
            if($ses_diff_time > $limit_session){
                session_destroy();
                echo "<meta http-equiv ='refresh' content = '1; URL = login.php' />";  
            }else{
                echo "Welcome to admin";
                echo "<a href = logout.php> Logout </a>";
            }

        }
    ?>
</body>
</html>