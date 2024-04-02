




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
    <link rel="stylesheet" href="../css/contact.css" />
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


      <div class="information">
        <div class="container">
      <?php
include("db.php");


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["edit_record"])) {
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

   
    $sql = "UPDATE contact_form_data SET name='$name', email='$email', subject='$subject', message='$message' WHERE id=$id";
    if (mysqli_query($connect, $sql)) {
        echo "Запись успешно обновлена";
    } else {
        echo "Ошибка обновления записи: " . mysqli_error($connect);
    }

    mysqli_close($connect);
    exit; 
}


if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM contact_form_data WHERE id = $id";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        echo "<div class='info_form'>";
        echo "<h5>Редактировать запись</h5>";
        echo "<form id='edit-form' method='post' action='edit_record.php'>";
        echo "<input type='hidden' name='id' value='$id'>"; 
        echo "<div class='form-group'>";
        echo "<label for='name'>Имя:</label>";
        echo "<input name='name' type='text' class='input_field' id='name' maxlength='50' value='{$row['name']}'>";
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label for='email'>Email:</label>";
        echo "<input type='email' id='email' name='email' class='input_field' maxlength='50' value='{$row['email']}'>";
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label for='address'>Тема:</label>";
        echo "<input type='text' id='address' name='subject' class='input_field' maxlength='50' value='{$row['subject']}'>";
        echo "</div>";
        echo "<div class='form-group'>";
        echo "<label for='review'>Сообщение:</label>";
        echo "<textarea id='review' name='message' rows='5' required>{$row['message']}</textarea>";
        echo "</div>";
        echo "<div class='form-buttons'>";
        echo "<button type='submit' class='reset' name='edit_record'>Сохранить</button>";
        echo "</div>";
        echo "</form>";
        echo "</div>";
    } else {
        echo "Запись с указанным ID не найдена";
    }
} else {
    echo "ID записи не указан";
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
