<?php
$login1 = filter_var(trim($_POST['login1']),
    FILTER_SANITIZE_STRING);

$pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

if (mb_strlen($login1) < 5 || mb_strlen($login1) > 90) {
    echo "Dont len login";
    exit();
}

$pass = md5($pass . "qasdfdsvdscsd1234");

include('db.php');

$res = mysqli_query($connect, "SELECT * FROM users WHERE login='$login1' AND pass='$pass'");

$user = mysqli_fetch_assoc($res);

if ($user == 0) {

    echo "Dont find user";
    exit();
}

setcookie('user', $user['name'], time() + 3600 * 24, '/');


header('Location: index.php');
exit();

?>