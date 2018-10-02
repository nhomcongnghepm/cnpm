<?php
if (isset($_POST['login'])) {
    if ($_POST['ho'] == null) {
        echo("* Bạn hãy nhập họ <br />");
    } else {
        $ho = $_POST['ho'];
    }
    if ($_POST['ten'] == null) {
        echo("* Bạn hãy nhập tên <br />");
    } else {
        $ten = $_POST['ten'];

    }
    if ($_POST['username'] == null) {
        echo("* Bạn hãy nhập tên đăng nhập <br />");
    } else if (strlen('username') < 6 || strlen('username') > 24) {
        echo "* Tên đăng nhập phải nằm trong khoảng 6-24 ký tự.";

    } else if (preg_match('/\W/', 'username')) {
        echo "* Tên đăng nhập không được chứa ký tự đặc biệt và khoảng trắng.";
    } else {
        $username = $_POST['username'];
    }
    if ($_POST['email'] == null) {
        echo("* Bạn hãy nhập email <br />");
    } else {
        $email = $_POST['email'];
    }
    if ($_POST['pwd1'] == null) {
        echo("* Bạn hãy nhập mật khẩu <br />");
    } else if ($_POST['pwd2'] == null) {
        echo("* Bạn hãy nhập lại mật khẩu <br />");
    } else if ($_POST['pwd1'] != $_POST['pwd2']) {
        echo("* Mật khẩu không trùng khớp. <a href='javascript: history.go(-1)'>Trở lại</a><br /> ");
        exit;
    } else {
        $pass_signup = sha1(($_POST['pwd1']));
    }

    if ($_POST['day'] == "day" || $_POST['month'] == "month" || $_POST['year'] == "year") {
        echo("* Bạn hãy chọn ngày sinh <br />");
    } else {
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $birthdate = $day . '-' . $month . '-' . $year;
    }
    if (isset($_POST['sex']) == null) {
        echo("* Bạn hãy chọn giới tính <br />");
    } else {
        $gender = $_POST['sex'];
    }
}
    ?>