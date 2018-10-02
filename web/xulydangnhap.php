<?php
 	include ("database.php");
if (isset($_POST['dangnhap'])) 
{
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['pwd']);
     
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    $query = mysqli_query($connect,"SELECT user, password, quyen FROM user WHERE user='$username'");
    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     $password=sha1($password);

    $row = mysqli_fetch_array($query);
     
    if ($password != $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    if($row['quyen']==1) {
        echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='/'>Về trang admin</a>";
    }
    else if($row['quyen']==2)
    {
        echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='/giaovien.php'>Vào trang giáo viên</a>";
    }
    else echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='/sinhvien.php'>Về trang sinh viên</a>";
    die();
}
?>