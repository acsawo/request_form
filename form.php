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
<div class="container">
    <header>
        <div class="logo"><img src="img/logo.jpg" alt=""></div>
        <div class="title"><h2>แบบฟอร์มแจ้งปัญหาหรือความต้องการให้ผู้เกี่ยวข้องดำเนินการ</h2></div> 
        <div class="berger"><h1><i class='fa fa-bars'></i></h1></div>
    </header>
    <section> 
    <form name="form1" method="post" action="inseart_data.php">
        <div class="body-form">
        <input type="hidden" name="user" value="0">
          <div class="w100">
              <div class="w20 right">วันที่</div>
              <div class="w80"><input type="text" id="datepicker" placeholder="วันที่" name="date" autocomplete="off" required></div>
          </div>
          <div class="w100">
              <div class="w20 right">ลักษะของปัญหาหรือความต้องการ <span class="font-red">*</span></div>
              <div class="w80"> 
                <select id="country" name="case">
                  <option value="ขอสถิติข้อมูล">ขอสถิติข้อมูล</option>
                  <option value="อื่นๆ">อื่นๆ</option>
                </select>
          </div>
          </div>
          <div class="w100">
              <div class="w20 right">หน่วยงาน/แผนก <span class="font-red">*</span></div>
              <div class="w80"><input type="text" id="input-form" name="department" required></div>
          </div>
          <div class="w100">
              <div class="w20 right">หมายเลขติดต่อกลับ <span class="font-red">*</span></div>
              <div class="w80"><input type="text" id="input-form" name="tel" required></div>
          </div>
          <div class="w100">
              <div class="w20 right">รายละเอียด <span class="font-red">*</span></div>
              <div class="w80">
              <textarea name="detail" rows="4" cols="50" required></textarea>
          </div>
          </div>
          <div class="w100">
              <div class="w20 right">ผู้ขอข้อมูล <span class="font-red">*</span></div>
              <div class="w80"><input type="text" id="input-form" name="name" required></div>
          </div>
          <div class="w100">
              <div class="w20 right">ช่องทางส่งผลการดำนเนินการ</div>
              <div class="w80"><input type="text" id="input-form" name="way"></div>
          </div>
          <div class="w100">
              <div class="w20 right">ชื่อบัญชี</div>
              <div class="w80"><input type="text" id="input-form" name="specify"></div>
          </div>
          <div class="w100">
              <div class="w20 right"></div>
              <div class="w80"><input type="reset" value="รีเซ้ต" ><input type="submit" value="บันทึก"></div>
          </div>

        </div>
        </form>
    </section>
    <footer>
       <p>&copy; Copyright by Computer Center Lerdsin Hospital.</p> 
    </footer>
</div>
</body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>แบบฟอร์มแจ้งปัญหาหรือความต้องการให้ผู้เกี่ยวข้องดำเนินการ</title>
    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="js/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="js/gijgo.min.js" type="text/javascript"></script>
    <link href="js/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
</head>
<body>

<div class="container">
<pre><h3> <img src="img/logo.jpg" class="img-polaroid" width="80">&nbsp;&nbsp;&nbsp;แบบฟอร์มขอข้อมูลสถิติ จากระบบโรงพยาบาล</h3></pre>

   
	<form class="form-horizontal"name="form1" method="post" action="inseart_data.php">
	
	<div class="form-group">
    <label for="inputDate" class="col-sm-2 control-label">วันที่ <font color="red">*</font> </label>
    <div class="col-sm-10">
		<input id="datepicker" width="270" placeholder="วันที่" name="date" />
    </div>
	</div>
  
    	<div class="form-group">
    <label for="inputTime" class="col-sm-2 control-label">ลักษะของปัญหาหรือความต้องการ <font color="red">*</font></label>
    <div class="col-sm-10">
    <select class="form-control" name="case">
		<option>ขอสถิติข้อมูล</option>
		<option>อื่นๆ</option>

	</select>
    </div>
	</div>
  
	
	<div class="form-group">
    <label for="inputDepartment" class="col-sm-2 control-label">หน่วยงาน/แผนก <font color="red">*</font></label>
    <div class="col-sm-10">
		<input type="text" class="form-control" placeholder="หน่วยงาน/แผนก" name="department">
    </div>
	</div>
  
	<div class="form-group">
    <label for="inputGroup" class="col-sm-2 control-label">หมายเลขติดต่อกลับ <font color="red">*</font></label>
    <div class="col-sm-10">
		<input type="text" class="form-control" placeholder="หมายเลขติดต่อกลับ" name="tel">
    </div>
	</div>  
  
	<div class="form-group">
    <label for="inputSubject" class="col-sm-2 control-label">รายละเอียด<font color="red">*</font></label>
    <div class="col-sm-10">
		<textarea class="form-control" rows="3" placeholder="รายละเอียด" name="detail"></textarea>
    </div>
	</div>    
  
 	<div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">ผู้ขอข้อมูล<font color="red">*</font></label>
    <div class="col-sm-10">
		<input type="text" class="form-control" placeholder="ผู้ขอข้อมูล" name="name">
    </div>
	</div>
	
	    	<div class="form-group">
    <label for="inputTime" class="col-sm-2 control-label">ช่องทางส่งผลการดำนเนินการ </label>
    <div class="col-sm-10">
    <select class="form-control" name="way">
		<option>Email</option>
		<option>เครื่องคอมพิวเตอร์ในระบบ รพ.</option>
		<option>line</option>
		<option>อื่นๆ</option>
	</select>
    </div>
	</div>
	

	<div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">ชื่อบัญชี  </label>
    <div class="col-sm-10">
		<input type="text" class="form-control" placeholder="ระบุ Email Address หรือ UserID Line หรือ ชื่อเครื่องคอมพิวเตอร์ ที่่ต้องการให้ส่งข้อมูลกลับ " name="specify">
    </div>
	</div>
	
 	<div class="form-group">
    <label for="inputOK" class="col-sm-2 control-label"></label>
    <div class="col-sm-10">
	    <input class="btn btn-default btn-lg" type="reset" name="Reset" id="button" value="Reset" />&nbsp;&nbsp;&nbsp;
    <input class="btn btn-primary btn-lg" type="submit" name="button2" id="button2" value="ส่งข้อมูล" />
    </div>
	</div>
</form>
</div>

	
	    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap'
        });
    </script>
</body>
</html> -->