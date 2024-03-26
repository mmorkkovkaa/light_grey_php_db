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
    <link rel="stylesheet" href="../css/potfolio.css" />
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
                <a href="../porfolio.php">Portfolio</a>
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

      <div class="gallery">
        <div class="container">
          <div class="gallery_name">
          <?php
            $result = mysqli_query($connect, "SELECT * FROM gallery");

            if (mysqli_num_rows($result) > 0) {
               
                while ($myrow = mysqli_fetch_array($result)) {
                    printf('
                    <h4>%s</h4>
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



          <div class="card-container1">
          <?php
            $result = mysqli_query($connect, "SELECT * FROM photo");

            if (mysqli_num_rows($result) > 0) {
               
                while ($myrow = mysqli_fetch_array($result)) {
                    printf('<div class="card1">
                    <img src="%s" alt="Фото 1" />
                    <div class="text">%s</div>
                  </div>',
                        $myrow['img'],
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

      <footer>
        <p>Copyright<a href="../index.html"> &copy; 2048 My company Name</a></p>
      </footer>
    </div>
  </body>
</html>
