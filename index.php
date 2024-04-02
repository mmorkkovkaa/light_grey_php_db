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
                            <a href="portfolio.php">Portfolio</a>
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
                    <?php
                    if(isset($_COOKIE['user'])) {
                        echo '<h3>Пользователь: ' . $_COOKIE['user'] . '</h3>';
                        echo '<button style="background-color: #4CAF50;
                        border: none;
                        color: white;
                        padding:5px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 15px;
                        cursor: pointer;">';
                        echo '<a href="exit.php" style="color: white; text-decoration: none;">Покинуть</a>';
                        echo '</button>';
                    }
                    ?>

                </div>
            </div>

        </header>

        <div class="welcome">
    <div class="container">
        <div class="inner_welcome">
            <?php
            $result = mysqli_query($connect, "SELECT * FROM first_tb");

            
            if (mysqli_num_rows($result) > 0) {
               
                while ($myrow = mysqli_fetch_array($result)) {
                    printf('
                        <div class="welcome_left">
                            <h1>%s</h1>
                            <p>%s</p>
                            <button><a href="detail.php?id=%s">Learn More</a></button>
                        </div>
                        <div class="welcome_right">
                            <img src="%s" alt="Image">
                        </div>',
                        $myrow['title'],
                        $myrow['description'],
                        $myrow['id'],
                        $myrow['img']
                        
                    );
                }
            } else {
                echo "0 результатов";
            }

           
            mysqli_free_result($result);

            
        
            ?>
            
        </div>
    </div>
</div>

            




        <div class="cards">
            <div class="container">
                <div class="cards_inner">
                    <?php
                    $result = mysqli_query($connect, "SELECT * FROM three_col");

                
                    if (mysqli_num_rows($result) > 0) {
                        while ($myrow = mysqli_fetch_array($result)) {
                            printf('
                                <div class="card">
                                    <h3>%s</h3>
                                    <p>%s</p>
                                    <button><a href="detail_1.php?id=%s">Learn More</a></button>
                                </div>',
                                $myrow['title'],
                                $myrow['description'],
                                $myrow['id']
                            );
                        }
                    } else {
                        echo "0 результатов";
                    }

                    
                    mysqli_free_result($result);

                
                    ?>
                </div>
            </div>
        </div>





        <div class="page_content">
            <div class="container">
                <div class="inner_page_content">
                    <div class="updates">
                        <h4>Latest Update</h4>
                                <?php
                    $result = mysqli_query($connect, "SELECT * FROM updates");

                
                    if (mysqli_num_rows($result) > 0) {
                        while ($myrow = mysqli_fetch_array($result)) {
                            printf('
                            <div class="news">
                            <img src="%s" alt="Image">
                            <div class="text-content">
                                <h6>%s</h6>
                                <p>%s</p>
                            </div>
                        </div>
                        <div class="gray_line"></div>
                        <span class="date">%s</span>',
                                $myrow['img'],
                                $myrow['title'],
                                $myrow['description'],
                                $myrow['dates']
                            );
                        }
                    } else {
                        echo "0 результатов";
                    }

                    
                    mysqli_free_result($result);
                            ?>

                            <?php
                    $result = mysqli_query($connect, "SELECT * FROM we_are");
                    if (mysqli_num_rows($result) > 0) {
                        while ($myrow = mysqli_fetch_array($result)) {
                            printf('<button><a href="detail_2.php?id=%s">Learn More</a></button>',
                            $myrow['id']
                            );
                        }
                    } else {
                        echo "0 результатов";
                    }
                    mysqli_free_result($result);
                            ?>
                    
                </div>








                    <div class="introduction">
                    <?php
                    $result = mysqli_query($connect, "SELECT * FROM we_are");

                
                    if (mysqli_num_rows($result) > 0) {
                        while ($myrow = mysqli_fetch_array($result)) {
                            printf('
                            <h4>%s</h4>
                            <div class="news_2">
                                <div class="text_content_2">
                                    <p class="cursive">%s</p>
                                    <p>%s</p>
                                </div>
                                <img src="%s" alt="big_picture">
                            </div> ',
                                $myrow['title'],
                                $myrow['phrase'],
                                $myrow['description'],
                                $myrow['img']
                            );
                        }
                    } else {
                        echo "0 результатов";
                    }

                    
                    mysqli_free_result($result);

                
                            ?>





                        <div class="check_point">
                        <ul class="left">
                            <?php
                    $result = mysqli_query($connect, "SELECT * FROM check_point");

                
                    if (mysqli_num_rows($result) > 0) {
                        while ($myrow = mysqli_fetch_array($result)) {
                            printf('
                                <li><img src="%s" alt="big_picture">%s</li>
                            ',
                                $myrow['img'],
                                $myrow['check_value']
                            );
                        }
                    } else {
                        echo "0 результатов";
                    }

                    
                    mysqli_free_result($result);

                
                            ?>
                                </ul>
                            <ul class="right">
                            <?php
                    $result = mysqli_query($connect, "SELECT * FROM check_point");

                
                    if (mysqli_num_rows($result) > 0) {
                        while ($myrow = mysqli_fetch_array($result)) {
                            printf('
                                <li><img src="%s" alt="big_picture">%s</li>
                            ',
                                $myrow['img'],
                                $myrow['check_value']
                            );
                        }
                    } else {
                        echo "0 результатов";
                    }

                    
                    mysqli_free_result($result);

                
                            ?>
                            </ul> 
                        </div>
                        <?php
                    $result = mysqli_query($connect, "SELECT * FROM we_are");
                    if (mysqli_num_rows($result) > 0) {
                        while ($myrow = mysqli_fetch_array($result)) {
                            printf('<button><a href="detail_2.php?id=%s">More</a></button>',
                            $myrow['id']
                            );
                        }
                    } else {
                        echo "0 результатов";
                    }
                    mysqli_free_result($result);
                            ?>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <p>Copyright<a href="index.html"> &copy; 2048 My company Name</a></p>
        </footer>
    </div>

</body>
</html>