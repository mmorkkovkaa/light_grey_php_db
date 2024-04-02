<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Light Grey</title>
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../core.css" />
    <link rel="stylesheet" href="../header_footer.css" />
    <meta
      name="viewport"
      content="width=1200px, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />

    <style>
        
        h2 {
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
            height: 40px;
            width: 250px;
        }
        button[type="submit"] {
            background-color: #ffa925;
            height:30px ;
            font-size: 18px;
            padding: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        img {
            float: left;
            margin-right: 20px;
            margin-bottom: 20px;
            width: 500px;
            height: 300px;
        }
        
    </style>
</head>
<body>

<div class="wrapper">
        <header>
            <div class="container">
                <div class="inner_header">
                        <div class="search">
                            <h2>Light Grey</h2>
                        </div>
                    <ul class="menu">
                        <li class="menu_link shadow">
                            <a href="../index.php">Home</a>
                        </li>
                        <li class="menu_link shadow">
                            <a href="../news.php">Latest News</a>
                        </li>
                        <li class="menu_link shadow">
                            <a href="../porfolio.php">Portfolio</a>
                        </li>
                        <li class="menu_link shadow">
                            <a href="../aboutus.php">About Us</a>
                        </li>
                        <li class="menu_link shadow">
                            <a href="../contact.php">Contact</a>
                        </li>
                        <li class="menu_link ">
                            <a href="../admin.php">Admin</a>
                        </li>
                    </ul>

                </div>
            </div>

        </header>

        <div class="container" style='margin-bottom: 160px; margin-top: 90px; '>
        <img src="https://images.gastronom.ru/vugjkHJrq4SlKChGSreZKHUXnP1XZRXgbAggZ3Kpgy0/pr:product-cover-image/g:ce/rs:auto:0:0:0/L2Ntcy9hbGwtaW1hZ2VzLzQxNDMwYmQwLThiZmUtNDJkYi04MTdjLTQzYmUzOTRjNWM0OS5qcGc" alt="Image" >
        <h1>Регистрация</h1>
       <form action="submit.php" method="post">
        <input type="text" class="form-control" name="login1" id="login1" placeholder="Введите логин"><br>

        <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>

        <button class="btn btn-success" type="submit">Авторизация</button>

    </form>
    <a style='font-size: 18px; color: #ffa925; margin-right: 10px ; ;' href="register.php">Регистрация</a>
    <a style='font-size: 18px; color: #ffa925; margin-right: 10px ; ;' href="../index.php">На главную</a>
        
           
    </div>


        

        <footer>
            <p>Copyright<a href="index.html"> &copy; 2048 My company Name</a></p>
        </footer>
    </div>

</body>
</html>