<?php
$login1 = filter_var(trim($_POST['login1']),
    FILTER_SANITIZE_STRING);

$name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);

$pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

if (mb_strlen($login1) < 5 || mb_strlen($login1) > 90) {
    echo "Dont len login";
    exit();
} else if (mb_strlen($name) < 3 || mb_strlen($login1) > 50) {
    echo "Dont len name";
    exit();
} else if (mb_strlen($pass) < 2 || mb_strlen($pass) > 20) {
    echo "Dont len pass";
    exit();
}

$pass = md5($pass . "qasdfdsvdscsd1234");

include('db.php');

$result = mysqli_query($connect, "INSERT INTO users (login, name, pass) VALUES ('$login1', '$name', '$pass')");


header('Location: admin.php');
exit();
?>