<?php
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Light Grey</title>
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../core.css" />
    <link rel="stylesheet" href="../css/aboutus.css" />
    <link rel="stylesheet" href="../header_footer.css" />
    <meta
      name="viewport"
      content="width=1200px, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
  </head>
  <body>
    <div class="wrapper">
      <header>
        <div class="container">
          <div class="inner_header">
            <div class="search">
              <h2>Light Grey</h2>
              <form>
                <input
                  type="text"
                  id="search"
                  name="q"
                  placeholder="Search..."
                />
              </form>
            </div>
            <ul class="menu">
              <li class="menu_link shadow">
                <a href="../index.php">Home</a>
              </li>
              <li class="menu_link shadow">
                <a href="../news.php">Latest News</a>
              </li>
              <li class="menu_link shadow">
                <a href="../portfolio.php">Portfolio</a>
              </li>
              <li class="menu_link shadow">
                <a href="../aboutus.php">About Us</a>
              </li>
              <li class="menu_link">
                <a href="../contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </header>

      <div class="about_us">
        <div class="container">
          <div class="inner_aboutus">
            <div class="who_we_are">
            <?php
                    $result = mysqli_query($connect, "SELECT * FROM we_are");

                
                    if (mysqli_num_rows($result) > 0) {
                        while ($myrow = mysqli_fetch_array($result)) {
                            printf('
                            <h4>%s</h4>
                            <div class="text_img">
                                  <img src="%s" alt="armchair" />
                                  <p><i>%s</i>%s</p>
                                 ',
                                 $myrow['title'],
                                 $myrow['img'],
                                $myrow['phrase'],
                                $myrow['description']
                                
                            );
                        }
                    } else {
                        echo "0 результатов";
                    }

                    
                    mysqli_free_result($result);

                
                            ?>
              </div>



              <div class="service">

              <?php
                    $result = mysqli_query($connect, "SELECT * FROM services");

                
                    if (mysqli_num_rows($result) > 0) {
                        while ($myrow = mysqli_fetch_array($result)) {
                            printf('<h4>%s</h4>
                            <p>%s</p>',
                                 $myrow['title'],
                                $myrow['description']
                                
                            );
                        }
                    } else {
                        echo "0 результатов";
                    }
                    mysqli_free_result($result);
                            ?>
              
              </div>




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




            <div class="our_news">
              <h4>Our News</h4>
              <?php
                    $result = mysqli_query($connect, "SELECT * FROM news");

                
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
                                $myrow['images'],
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
                            printf('<button><a href="detail_2.php?id=%s">More</a></button>',
                            $myrow['id']
                            );
                        }
                    } else {
                        echo "0 результатов";
                    }
                    mysqli_free_result($result);
                            ?>

<div class="testimonials">
              <?php
                    $result = mysqli_query($connect, "SELECT * FROM testimonals");

                
                    if (mysqli_num_rows($result) > 0) {
                        while ($myrow = mysqli_fetch_array($result)) {
                            printf('
                            <h4>%s</h4>
                            <p>%s
                            </p>
                            <i><strong>%s</strong></i>
                            ',
                                $myrow['title'],
                                $myrow['description'],
                                $myrow['textt']
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
      </div>

      <footer>
        <p>Copyright<a href="../index.html"> &copy; 2048 My company Name</a></p>
      </footer>
    </div>
  </body>
</html>
