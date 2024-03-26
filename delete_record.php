<?php
include("db.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // SQL запрос для удаления записи с указанным id
    $sql = "DELETE FROM contact_form_data WHERE id = $id";

    if (mysqli_query($connect, $sql)) {
        echo "Запись успешно удалена";
    } else {
        echo "Ошибка удаления записи: " . mysqli_error($connect);
    }

    // Перенаправление на страницу, откуда было выполнено удаление
    header("Location: ".$_SERVER['HTTP_REFERER']);
} else {
    echo "ID записи не указан";
}

mysqli_close($connect);
?>
