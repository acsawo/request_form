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
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>
<body>
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
          $id_select = $_GET['id_select'];
          include('func.php');
          include('connect.inc.php');
          $sql = "select * from `request_form` where id = '$id_select' " ;		
          $result = mysql_query($sql) or die ("ไม่สามารถ query คำสั่งได้ครับ") ;
              while($dbarr = mysql_fetch_array($result)) {
              $id = $dbarr['id'] ;
              $date = $dbarr['date'];
              $case = $dbarr['case'] ;
              $department = $dbarr['department'] ;
              $tel = $dbarr['tel'] ;
              $name = $dbarr['name'] ;
              $way = $dbarr['way'] ;
              $specify = $dbarr['specify'] ;
              $detail = $dbarr['detail'] ;
              $status = $dbarr['status'] ;
              }    
              if($ses_diff_time > $ses_limit_time){
                session_destroy();
                echo "<meta http-equiv ='refresh' content = '1; URL = admin.php' />";  
            }else{?>
              <div class="container">
              <header>
                  <div class="logo"><img src="img/logo.jpg" alt=""></div>
                  <div class="title"><h2>แบบฟอร์มแจ้งปัญหาหรือความต้องการให้ผู้เกี่ยวข้องดำเนินการ</h2></div> 
                  <div class="berger"><h1><i class='fa fa-bars'></i></h1></div>
              </header>
              <section> 
              <form name="form1" method="post" action="update_data.php">
                  <div class="body-form">
                  <input type="hidden" name="user" value="1">
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="w100 dflex">
                        <div class="w20 padding10 right">วันที่</div>
                        <div class="w80 padding10"><input type="text" id="datepicker" value="<?php echo $date; ?>" name="date" autocomplete="off" required ></div>
                    </div>
                    <div class="w100 dflex">
                        <div class="w20 padding10 right">ลักษะของปัญหาหรือความต้องการ <span class="font-red">*</span></div>
                        <div class="w80 padding10"> 
                          <select id="country" name="case">
                            <option value="ขอสถิติข้อมูล" <?php if($case=="ขอสถิติข้อมูล"){echo "selected";}  ?>>ขอสถิติข้อมูล</option>
                            <option value="อื่นๆ"<?php if($case=="อื่นๆ"){echo "selected";}  ?>>อื่นๆ </option>
                          </select>
                    </div>
                    </div>
                    <div class="w100 dflex">
                        <div class="w20 padding10 right">หน่วยงาน/แผนก <span class="font-red">*</span></div>
                        <div class="w80 padding10"><input type="text" id="input-form" name="department" value="<?php echo $department; ?>" required></div>
                    </div>
                    <div class="w100 dflex">
                        <div class="w20 padding10 right">หมายเลขติดต่อกลับ <span class="font-red">*</span></div>
                        <div class="w80 padding10"><input type="text" id="input-form" name="tel" value="<?php echo $tel; ?>" required></div>
                    </div>
                    <div class="w100 dflex">
                        <div class="w20 padding10 right">รายละเอียด <span class="font-red">*</span></div>
                        <div class="w80 padding10">
                        <textarea name="detail" rows="4" cols="50" required><?php echo $detail; ?></textarea>
                    </div>
                    </div>
                    <div class="w100 dflex">
                        <div class="w20 padding10 right">ผู้ขอข้อมูล <span class="font-red">*</span></div>
                        <div class="w80 padding10"><input type="text" id="input-form" name="name" value="<?php echo $name; ?>" required></div>
                    </div>
                    <div class="w100 dflex">
                        <div class="w20 padding10 right">ช่องทางส่งผลการดำนเนินการ</div>
                        <div class="w80 padding10"> 
                          <select class="form-control" name="way">
                            <option <?php if($way=="email"){echo "selected";}  ?>>email</option>
                            <option <?php if($way=="line"){echo "selected";}  ?>>line</option>
                            <option <?php if($way=="เครื่องคอมพิวเตอร์ในระบบ รพ."){echo "selected";}  ?>>เครื่องคอมพิวเตอร์ในระบบ รพ.</option>
                            <option <?php if($way=="อื่นๆ"){echo "selected";}  ?>>อื่นๆ</option>
                          </select>
                        </div>
                    </div>
                    <div class="w100 dflex">
                        <div class="w20 padding10"></div>
                        <div class="w80 padding10">
                          <div class="w100 dtable">
                            <div class="w10 right" style="display:table-cell;vertical-align middle;">ชื่อบัญชี : </div>
                            <div class="w90"> <input type="text" id="input-form" name="specify" value="<?php echo $specify; ?>"></div>
                          </div>
                        </div>
                    </div>
                    <div class="w100 dflex">
                        <div class="w20 padding10 right"></div>
                        <div class="w80 padding10"><input type="button" onclick="window.location.href='admin.php';" value ="ยกเลิก"><input type="submit" value="บันทึก"></div>
                    </div>
          
                  </div>
                  </form>
              </section>
              <footer>
                 <p>&copy; Copyright by Computer Center Lerdsin Hospital.</p> 
              </footer>
          </div>
          <?php
            }
        }  

    ?>
</body>
</html>
