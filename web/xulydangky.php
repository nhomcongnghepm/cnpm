<?php
 // Nếu không phải là sự kiện đăng ký thì không xử lý
	if (isset($_POST['login'])) {
        $ho = $_POST['ho'];
        $ten = $_POST['ten'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass_signup = sha1(($_POST['pwd1']));
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $birthdate = $day . '-' . $month . '-' . $year;
        $repass_signup = sha1($_POST['pwd2']);
        $quyen=$_POST['quyen'];
        if (isset($_POST['sex']) != null) {
    $gender = $_POST['sex'];
}
        if($ho && $ten && $username && $email && $pass_signup && $birthdate && $gender)
		{
			include ("database.php");
			$taikhoantontai=mysqli_query($connect,"SELECT user FROM user WHERE user='$username'");
			$emailtontai=mysqli_query($connect,"SELECT email FROM user WHERE email='$email'");
		if (mysqli_num_rows($taikhoantontai) > 0){
			 echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
			exit;
		}
		$regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i";
		if (!preg_match($regex, $email))
		{
			 echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
			exit;
		}

		if (mysqli_num_rows($emailtontai) > 0)
		{
			 echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
			exit;
		}

		$addmember = mysqli_query($connect,"
			INSERT INTO user (
				id,
				ho,
				ten,
				user,
				email,
				password,
				birthdate,
				Gioitinh,
				quyen
			)
			VALUE (
				'',
				'{$ho}',
				'{$ten}',
				'{$username}',
				'{$email}',
				'{$pass_signup}',
				'{$birthdate}',
				'{$gender}',
				'{$quyen}'
			)
		");

		if ($addmember)
			echo "Quá trình đăng ký thành công.";
		else
			echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
		}
	}
?>     
