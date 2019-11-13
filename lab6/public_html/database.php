<?php 
    // sql to create table
    $sql = "CREATE TABLE MyTABLE(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        subject VARCHAR(30) NOT NULL,
        location VARCHAR(30) NOT NULL,
        date_taken DATE(30)
        url VARCHAR(30) NOT NULL
        )"; 
        
       
    $sql = "INSERT INTO MyTable (subject, location, date_taken,url)
    VALUES ('Person', 'place', '11/11/2019')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);


?>

