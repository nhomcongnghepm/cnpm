<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng Ký</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="dangky.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/jquery-1.11.1.min.js"></script>
</head>
<body>
  <div class="container"> 
 <h1 class="text-center">Mời bạn đăng ký thành viên</h1> 
 <div class="row"> 
  <div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-offset-4"> 
   <legend><a href=""><i class="glyphicon glyphicon-globe"></i></a> Đăng ký thành viên!
   </legend> 
   <legend> * Bạn vui lòng nhập đầy đủ thông tin!
   </legend> 
   <form action="dangky.php" method="post" class="form" role="form">
   	<div class="form-group"> 
    <div class="row"> 
     <div class="col-xs-6 col-md-6"> <input class="form-control" id="ho" name="ho" placeholder="Họ">
     </div> 
     <div class="col-xs-6 col-md-6"> <input class="form-control" id="ten" name="ten" placeholder="Tên" > 
     </div> 
    </div> 
     <div class="form-group"><input class="form-control"  name="username" placeholder="Tên đăng nhập" type="text" id="username"></div>
     <div class="form-group"><input class="form-control"  name="email" placeholder="Email" type="email"></div>
     <div class="form-group"><input class="form-control"  name="pwd1" placeholder="Mật khẩu" type="password"> <input class="form-control" id="pwd2" name="pwd2" placeholder="Nhập lại mật khẩu" type="password"></div>
    <label for=""> Ngày sinh</label> 
    <div class="row"> 
    <?php include("function.php") ?>
     <div class="col-xs-4 col-md-4"> <select  class="form-control" name="day" placeholder="day"> <option value="day">Ngày <?php day();?></option></select> 
     </div> 
     <div class="col-xs-4 col-md-4"> <select  class="form-control" name="month"> <option value="month">Tháng <?php  thang();?></option></select>
     </div> 
     <div class="col-xs-4 col-md-4"> <select  class="form-control" name="year"> <option value="year">Năm <?php  nam();?></option></select>
     </div> 
    </div> <label class="radio-inline"><input  id="inlineCheckbox1" name="sex" value="Nam" type="radio">Nam</label> <label  class="radio-inline"><input name="sex" id="inlineCheckbox2" value="Nữ" type="radio">Nữ </label> 
    <br> 
    <br> 
    <button class="btn btn-lg btn-primary btn-block"  name="login"> Đăng ký</button> 
    <br><br>
     <div class="a" <br style="color:red;"><?php include ("xulydangky.php")?></div>
    </div>
   </form> 
  </div> 
 </div>
</div>
</body>
</html>
</body>
</html>