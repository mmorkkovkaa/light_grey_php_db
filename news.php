<?php
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Light Gray</title>
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../core.css" />
    <link rel="stylesheet" href="../css/newa.css" />
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

      <div class="place_holder_news">
        <div class="container">
          <div class="left_news">
          <div class="post_box">
            <?php
            $result = mysqli_query($connect, "SELECT * FROM sed_molis");

            
            if (mysqli_num_rows($result) > 0) {
               
                while ($myrow = mysqli_fetch_array($result)) {
                    printf('
                    
                    <div class="post_header">
                <p class="post_meta">
                  <span class="cat"
                    >Posted in <a href="#">Web Templates</a>,
                    <a href="#">CSS</a></span
                  >
                  | Date: June 28, 2048
                </p>
                <h5>%s</h5>
              </div>
              <a href="#"><img src="%s" alt="Image" /></a>
              <p>%s</p>
              <button><a href="detail_4.php?id=%s">More</a></button>
              ',
  
                        $myrow['title'],
                        $myrow['images'],
                        $myrow['description'],
                        $myrow['id']
                        
                    );
                }
            } else {
                echo "0 результатов";
            }

           
            mysqli_free_result($result);

            
        
            ?>


              <div class="cleaner"></div>
            </div>

          <div class="post_box">
          <?php
            $result = mysqli_query($connect, "SELECT * FROM nunc_varios");

            
            if (mysqli_num_rows($result) > 0) {
               
                while ($myrow = mysqli_fetch_array($result)) {
                    printf('
                    
              <div class="post_header">
                <p class="post_meta">
                  <span class="cat"
                    >Posted in <a href="#">Interfaces</a>,
                    <a href="#">Web Design</a></span
                  >
                  | Date: June 24, 2048
                </p>
                <h5>%s</h5>
              </div>
              <a href="#"
                ><img class="decor" src="%s" alt="Image"
              /></a>
              <p>%s</p>
              <button><a href="detail_3.php?id=%s">More</a></button>
              ',
  
                        $myrow['title'],
                        $myrow['images'],
                        $myrow['description'],
                        $myrow['id']
                        
                    );
                }
            } else {
                echo "0 результатов";
            }

           
            mysqli_free_result($result);

            
        
            ?>
              <div class="cleaner"></div>
            </div>
          </div>

          <div class="right_news">
            <div class="categoris">
              <h4>Categories</h4>
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
              </div>
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

        <footer>
          <p>
            Copyright<a href="../index.html"> &copy; 2048 My company Name</a>
          </p>
        </footer>
      </div>
    </div>
  </body>
</html>
