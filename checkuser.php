<?php 
session_start();
ob_start();
error_reporting (E_ALL ^ E_NOTICE);
error_reporting(0); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Page Request Form </title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>
<body>
<?php
    if(!isset($_GET['id_select'])){
        echo "<meta http-equiv='refresh'  content='0;URL=index.php'>";
        exit();
    }
?>


    <?php 
        $id_select = $_GET['id_select'];
        include('connect.inc.php');  
        $sql = "SELECT passcode,name FROM `request_form` WHERE `id` = $id_select" ;		
        $result = mysql_query($sql) or die ("ไม่สามารถ query คำสั่งได้ครับ") ; 
        while($dbarr = mysql_fetch_array($result)) {
	    $passcode = $dbarr['passcode'] ;
        $name = $dbarr['name'] ;

        }
    ?>
<div class="container">
            <header>
                <div class="logo"><img src="img/logo.jpg" alt="logo"></div>
                <div class="title"><h2>แบบฟอร์มแจ้งปัญหาหรือความต้องการให้ผู้เกี่ยวข้องดำเนินการ</h2></div> 
                <div class="berger"><h1><i class='fa fa-bars'></i></h1></div>
            </header>
            <section>
                <div class="body-login">
                    <h3><strong>แก้ไข Request ของ <?php echo $name; ?></strong></h3><br>
                    <form name='form1' method='post' action='edit_user.php'>
                    <label for="passcode">passcode :</label>
                    <input type="hidden"  name="id_select" value="<?php echo $id_select ?>">
                    <input type='password' name='passcode_form'>
                    <input type='submit' name='button' value='ตกลง'></td>
                </div>
            </section>
            <footer>
               <p>&copy; Copyright by Computer Center Lerdsin Hospital.</p> 
            </footer>
        </div>


</body>
</html>
