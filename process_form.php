<?php
include("db.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['address'];
    $message = $_POST['review'];

    
    $sql = "INSERT INTO contact_form_data (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    
    if (mysqli_query($connect, $sql)) {
        
        echo "Record added successfully";
    } else {
       
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
}


mysqli_close($connect);
?>
