<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login session</title>
</head>
<body>
    <?php 

        session_start();
        error_reporting(~E_NOTICE);
        $user = $_POST['user'];
        $password = $_POST['pass'];

        if(($user != 'root')||($password !='1234')){
            echo "error login";
            echo "<meta http-equiv ='refresh' content = '1; URL = login.php' />";     
        }else{
            $_SESSION[ses_userid] = session_id();
            $_SESSION[ses_user] = $user;
            $_SESSION[login_time_stamp] = time();
            // echo "<meta http-equiv ='refresh' content = '1; URL = adminindex.php' />";    
        }
    ?>
</body>
</html>