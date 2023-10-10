<?php
    $data = $_POST['full_name'];

    $connection = new mysqli("localhost", "root", "", "silin_db");
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo $data();
    }

    $str = $_POST();

    $addressee = $_POST['addressee'];
    $full_name =  $_POST['full_name'];
    $question =  $_POST['question'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $text_of_question = $_POST['text_of_question'];

    $sql = "INSERT INTO question (addressee, full_name, question, phone_number, email, text_of_question) VALUES
    ('$addressee', '$full_name', '$question', '$phone_number', '$email', '$text_of_question')";

    mysqli_close($connection);
?>