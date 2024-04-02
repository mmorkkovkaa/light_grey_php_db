<?php
include("db.php");
?>
<!doctype html>
<html lang="en">
<head>
<title>Light Grey</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="core.css">
    <link rel="stylesheet" href="header_footer.css">
    <meta name="viewport" content="width=1200px, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <style>
        .content {
            text-align: center;
            max-width: 800px; /* Максимальная ширина контейнера */
            margin: 0 auto; /* Центрирование контейнера по горизонтали */
        }

        .content h1 {
            font-size: 24px;
            margin-bottom: 10px; /* Отступ снизу для заголовка */
        }

        .content p {
            font-size: 16px;
            margin-bottom: 20px; /* Отступ снизу для абзаца */
        }

        .content img {
            float: right; /* Выравнивание картинки справа */
            max-width: 300px; /* Максимальная ширина картинки */
            margin-left: 20px; /* Отступ слева от текста */
        }

        .content iframe {
            clear: both; /* Очистка float для элемента iframe */
            width: 100%; /* Заполнение всей ширины контейнера */
            height: 500px;
            
        }
    </style>
</head>
</head>
<body>

<div class="wrapper">
        <header>
            <div class="container">
                <div class="inner_header">
                        <div class="search">
                            <h2>Light Grey</h2>
                            <form>
                                <input type="text" id="search" name="q" placeholder="Search..." />
                            </form>
                        </div>
                    <ul class="menu">
                        <li class="menu_link shadow">
                            <a href="index.php">Home</a>
                        </li>
                        <li class="menu_link shadow">
                            <a href="news.php">Latest News</a>
                        </li>
                        <li class="menu_link shadow">
                            <a href="porfolio.php">Portfolio</a>
                        </li>
                        <li class="menu_link shadow">
                            <a href="aboutus.php">About Us</a>
                        </li>
                        <li class="menu_link shadow">
                            <a href="contact.php">Contact</a>
                        </li>
                        <li class="menu_link ">
                            <a href="admin.php">Admin</a>
                        </li>
                    </ul>

                </div>
            </div>

        </header>



        <?php
$id = $_GET['id'];
$result = mysqli_query($connect, "SELECT * FROM sed_molis WHERE id=$id");
$myrow = mysqli_fetch_array($result);
?>

<div class="content">
    <h1><?php echo $myrow['title'] ?></h1>
    <p><?php echo $myrow['description'] ?></p>
    <iframe src="<?php echo $myrow['video_url'] ?>" frameborder="0"></iframe>

</div>



        <footer>
            <p>Copyright<a href="index.html"> &copy; 2048 My company Name</a></p>
        </footer>
    </div>

</body>
</html>