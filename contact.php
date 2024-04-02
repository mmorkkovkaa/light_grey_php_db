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
    <link rel="stylesheet" href="../css/contact..css" />
    <link rel="stylesheet" href="../header_footer.css" />
    <meta
      name="viewport"
      content="width=1200px, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <style>
        .submitted-info {
            display: flex;
            flex-direction: column;
            margin-right: 550px;
            margin-bottom: 30px;
            margin-top: 10px;
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

      <div class="information">
        <div class="container">
          <div class="inner_information">
            <div class="info_contact">
            <?php
                    $result = mysqli_query($connect, "SELECT * FROM contact");
                    if (mysqli_num_rows($result) > 0) {
                        while ($myrow = mysqli_fetch_array($result)) {
                            printf('
                            <h4>%s</h4>
                            <p>%s</p>
                            <div class="where">
                              <h5>%s</h5>
                              <img src="%s" alt="map"   style="width: 260px; height: 200px; border: 1px solid black;" >
                            </div>
                            <div class="company">
                              <h5>%s</h5>
                              <h6>%s</h6>
                              <p>%s</p>
                              <ul>
                                <li>%s</li>
                                <li>%s</li>
                              </ul>',
                            $myrow['title'],
                            $myrow['description'],
                            $myrow['seconde_title'],
                            $myrow['img'],
                            $myrow['third_title'],
                            $myrow['adress_title'],
                            $myrow['adress'],
                            $myrow['tel'],
                            $myrow['fax']
                            );
                        }
                    } else {
                        echo "0 результатов";
                    }
                    mysqli_free_result($result);
                            ?>
              
              </div>
            </div>


            <?php

    function display_form($name = "", $email = "", $subject = "", $message = "")
    {
        echo "<div class='info_form'>";
        echo "<h5>Форма обратной связи</h5>";
        echo "<form id='review-form' method='post' action=''>";
        echo "<div class='form-group'>";
        echo "<label for='name'>Имя:</label>";
        echo "<input name='name' type='text' class='input_field' id='name' maxlength='50' value='$name'>";
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label for='email'>Email:</label>";
        echo "<input type='email' id='email' name='email' class='input_field' maxlength='50' value='$email'>";
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label for='address'>Тема:</label>";
        echo "<input type='text' id='address' name='subject' class='input_field' maxlength='50' value='$subject'>";
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label for='review'>Сообщение:</label>";
        echo "<textarea id='review' name='review' rows='5' required>$message</textarea>";
        echo "</div>";
        echo "<div class='form-buttons'>";
        echo "<button type='reset' class='send'>Сбросить</button>";
        echo "<button type='submit' class='reset' name='add_record'>Отправить</button>";
        echo "</div>";
        echo "</form>";
        echo "</div>";
        echo "</div>";
    }
  
    
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["add_record"])) {

        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
        $message = filter_input(INPUT_POST, 'review', FILTER_SANITIZE_STRING);

        
        $stmt = $connect->prepare("INSERT INTO contact_form_data (name, email, subject, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $subject, $message);
        $stmt->execute();


        $stmt->close();
    }

  
    
    if (isset($_GET["delete_id"])) {
        $delete_id = filter_input(INPUT_GET, 'delete_id', FILTER_VALIDATE_INT);

      
        $stmt = $connect->prepare("DELETE FROM contact_form_data WHERE id = ?");
        $stmt->bind_param("i", $delete_id);
        $stmt->execute();

        if ($stmt->affected_rows === 1) {
            echo "Запись успешно удалена";
        } else {
            echo "Ошибка удаления записи: " . $stmt->error;
        }

        $stmt->close();
    }

    
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["edit_id"])) {
        $edit_id = filter_input(INPUT_POST, 'edit_id', FILTER_VALIDATE_INT);
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    }

    
    display_form();


    if (!isset($_COOKIE['user'])) {
      echo "<h5>Чтобы увидеть дополнительную информацию, пожалуйста,<button><a href='admin.php'>Войдите</a></button> или <button><a href='register.php'>Зарегистрируйтесь</a></button>.</h5>";
  } else {
      $sql = "SELECT * FROM contact_form_data";
      $result = mysqli_query($connect, $sql);
  
      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
              echo "<div class='submitted-info'>";
              echo "<h5>Submitted Information</h5>";
              echo "<p><strong>Name:</strong> " . $row['name'] . "</p>";
              echo "<p><strong>Email:</strong> " . $row['email'] . "</p>";
              echo "<p><strong>Subject:</strong> " . $row['subject'] . "</p>";
              echo "<p><strong>Message:</strong> " . $row['message'] . "</p>";
              echo "<button><a href='edit_record.php?id=" . $row['id'] . "'>Редактировать</a></button>";
              echo "<button><a href='delete_record.php?id=" . $row['id'] . "'>Удалить</a></button>";
              echo "</div>";
          }
      } else {
          echo "0 результатов";
      }
  }

mysqli_close($connect);
    ?>
          
        </div>
      </div>

      <footer>
        <p>Copyright<a href="../index.html"> &copy; 2048 My company Name</a></p>
      </footer>
    </div>
  </body>
</html>
