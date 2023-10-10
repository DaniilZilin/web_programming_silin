<?php
    $connection = new mysqli("localhost", "root", "", "silin_db");

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $addressee = $_POST['addressee'];
    $fullName = $_POST['fullName'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $question = $_POST['question'];
    $textOfQuestion = $_POST['textOfQuestion'];

    $sql = "INSERT INTO question (addressee, full_name, question, phone_number, email, text_of_question) VALUES
    ('$addressee', '$fullName', '$question', '$phoneNumber', '$email', '$textOfQuestion');";

    $result = $connection->query($sql);
}

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $query = "select * from offical_list";
    $query2 = "select * from question";
    $query3 = "select * from destination";

    $result = $connection->query($query);
    $result2 = $connection->query($query2);
    $result3 = $connection->query($query3);


    foreach ($result as $data) {
        echo "<tr><td>" . $data['offical_id'] . "</td>";
        echo "<td>" . $data['last_name'] . "</td>";
        echo "<td>" . $data['first_name'] . "</td>";
        echo "<td>" . $data['surname'] . "</td></tr>";
    }

    foreach ($result2 as $data) {
        echo "<tr><td>" . $data['addressee'] . "</td>";
        echo "<tr><td>" . $data['full_name'] . "</td>";
        echo "<td>" . $data['email'] . "</td>";
        echo "<td>" . $data['question'] . "</td>";
        echo "<td>" . $data['phone_number'] . "</td></tr>";
        echo "<td>" . $data['text_of_question'] . "</td></tr>";
    }

    foreach ($result3 as $data) {
        echo "<tr><td>" . $data['id'] . "</td>";
        echo "<td>" . $data['name'] . "</td>";
    }
}

    mysqli_close($connection);
?>