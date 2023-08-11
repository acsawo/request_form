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
    <title>Admin Page Request Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,600;0,700;1,600;1,700&family=Sarabun:ital,wght@0,100;0,200;0,300;0,500;0,600;1,100;1,200;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">    
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>             
<button onclick="topFunction()" id="myBtn" title="Go to top">Top <i class="fa-solid fa-arrow-up-long"></i></button>           
    <?php
        $ses_userid = $_SESSION[ses_userid];
        $ses_user = $_SESSION[ses_user];
        $ses_login_time_stamp = $_SESSION[login_time_stamp];
        $ses_limit_time = $_SESSION[limit_time];
        $ses_diff_time = (time() - $ses_login_time_stamp);


        if(($ses_userid <> SESSION_id())||($ses_user == ""))
        {?>
            <div class="container">
            <header>
                <div class="logo"><img src="img/logo.jpg" alt="logo"></div>
                <div class="title"><h2>แบบฟอร์มแจ้งปัญหาหรือความต้องการให้ผู้เกี่ยวข้องดำเนินการ</h2></div> 
                <div class="berger"><h1><i class='fa fa-bars'></i></h1></div>
            </header>
            <section>
                <div class="body-login">
                    <h3><strong>Admin Login Page</strong></h3><br>
                    <form name='form1' method='post' action='checkadmin.php'>
                    <label for="psd">รหัสผ่าน :</label>
                    <input type='password' id='psd' name='psd'>
                    <input type='submit' name='button' value='Login'></td>
                </div>
            </section>
            <footer>
               <p>&copy; Copyright by Computer Center Lerdsin Hospital.</p> 
            </footer>
        </div>
        <?php
        }else{
            if($ses_diff_time > $ses_limit_time){
                session_destroy();
                echo "<meta http-equiv='refresh' content='1;url=bin.php'>";
                ?>
            <?php
            }else{?>
<div class="container">
    <header>
        <div class="logo"><img src="img/logo.jpg" alt=""></div>
        <div class="title"><h2>แบบฟอร์มแจ้งปัญหาหรือความต้องการให้ผู้เกี่ยวข้องดำเนินการ</h2></div> 
        <div class="berger"><h1><i class='fa fa-bars'></i></h1></div>
    </header>
    <nav><a href="admin.php"><button class="SteelBlue"><i class='fa fa-database' style="font-size:16px"></i> หน้าขอข้อมูล</button></a> <a href="logout.php"><button class="seagreen"><i class='fa fa-sign-out' style="font-size:20px"></i> ออกจากระบบ</button></a></nav>
    <section>
        <div class="body-table">
        <?php
        include('func.php');
        include('connect.inc.php');        
            $sql = "SELECT * FROM request_form WHERE status = 3 ORDER BY id DESC " ;		
            $result = mysql_query($sql) or die ("ไม่สามารถ query คำสั่งได้ครับ") ; ?>

                <table class="table-list">
                        <tr>
		                    <th width="50"><div class="text-center">ลำดับ</div></th>
		                    <th width="150"><div class="text-center">วันที่</div></th>
		                    <th width="250"><div class="text-center">ลักษณะปัญหาหรือความต้องการ</div></th>
		                    <th width="250"><div class="text-center">ผู้แจ้ง</div></th>
		                    <th width="150"><div class="text-center">หมายเลขติดต่อ</div></th>
		                    <th width="200"><div class="text-center">สถานะ</div></th>
		                    <th width="200"><div class="text-center">ปรับสถานะ</div></th>
		                </tr>
                        <?php while($dbarr = mysql_fetch_array($result)) {
				        $id = $dbarr['id'] ;
				        $date = $dbarr['date'];
				        $case = $dbarr['case'] ;
				        $department = $dbarr['department'] ;
				        $name = $dbarr['name'] ;
				        $tel = $dbarr['tel'] ;
				        $status = $dbarr['status'] ;?>
                        <tr>
                            <td><div class="text-center"><?php echo "<a href='detail.php?id_select=$id'>$id</a>"; ?></div></td>
		                    <td><div class="text-center"><?php echo "<a href='detail.php?id_select=$id'>$date</a>"; ?></div></td>
                            <td><div class="text-center"><?php echo "<a href='detail.php?id_select=$id'>$case</a>"; ?></div></td>
			                <td><div class="text-center"><?php echo "<a href='detail.php?id_select=$id'>$name</a>"; ?></div></td>
                            <td><div class="text-center"><?php echo "<a href='detail.php?id_select=$id'>$tel</a>"; ?></div></td>
                            <td><div class="text-center <?php if($status==1){echo 'red';}elseif($status==2){echo 'green';}else{echo 'gray';}?>"><?php echo get_status($status); ?></div></td>
			                <td><div class="text-center"><?php echo "<a href='recovery.php?id_select=$id'><button class='SteelBlue'><i class='fas fa-undo' style='font-size:16px'></i> กู้คืน</button></a>";?></div></td>
		                </tr>
                        <?php } ?>
                </table>
        </div>
        </section>
    <footer>
        <p>&copy; Copyright by Computer Center Lerdsin Hospital.</p> 
    </footer>
</div>
            <?php
            }

        }
    ?>
<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>