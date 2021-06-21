<?php
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$number = $_POST['number'];
$gender = $_POST['gender'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'Database');
if($conn->connect_error){
    die("Connection Failed : " .$conn-> connect_error);
}esle{
    stmt = $conn->prepare("insert into newphp(fullName, email, number, gender)
    values(?, ?, ?, ?)");
    stmt->bind_param("ssis", $fullName, $email, $number, $gender); 
    stmt->execute();
    echo "registration successfully";
    stmt->close();
    $conn->close();
}
?>