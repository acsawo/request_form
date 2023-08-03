<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>แบบฟอร์มแจ้งปัญหาหรือความต้องการให้ผู้เกี่ยวข้องดำเนินการ</title>
    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="js/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="js/gijgo.min.js" type="text/javascript"></script>
    <link href="js/gijgo.min.css" rel="stylesheet" type="text/css" />
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
</html>