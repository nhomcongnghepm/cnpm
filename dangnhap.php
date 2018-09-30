<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng Nhập</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="dangnhap.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="container"> 
 <div class="row vertical-center-row"> 
  <div class="col-md-4 col-center-block login-widget"> 
   <h1 class="text-center"><i class="fa fa-dot-circle-o"></i> Đăng Nhập
   </h1> 
        <div class="a" <br style="color:red;"><?php include ("xulydangnhap.php")?></div>
      <form action="dangnhap.php" method="post" class="form" role="form">
   <div> 
    <div class="form-group"> 
     <div class="input-group"> 
      <div class="input-group-addon"><i class="fa fa-user fa-fw"></i>
      </div> <input class="form-control" name="username" placeholder="Tên đăng nhập" type="text"> 
     </div> 
    </div>  
    <div class="form-group"> 
     <div class="input-group"> 
      <div class="input-group-addon"><i class="fa fa-key fa-fw"></i>
      </div> <input class="form-control" name="pwd" placeholder="******" type="password"> 
     </div> 
    </div> 
    <div class="form-group"> 
     <div class="checkbox"> <label for="c1"><input id="c1" name="cc" type="checkbox">Nhớ thông tin</label> 
     </div> 
    </div> 
    <div class="form-group"> 
     <button type="submit" name="dangnhap" class="btn btn-primary btn-block">Đăng nhập</button> 
     <hr> 
     <p class="text-center">Bạn có tài khoản không? <strong><a href="dangky.php" class="blue-text">Đăng ký ngay!</a></strong>
     </p> 
    </div> 
   </div> 
  </form>
  </div> 
 </div>
</div>
</body>
</html>