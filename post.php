<?php
    include "config.php";
    $name = $_POST['name'];
    $age = $_POST['age'];
    $job = $_POST['job'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $description = $_POST['description'];

    $sql = "insert into samsan (id, name, age, job, phone, address, description) 
    values(null, '$name', '$age', '$job', '$phone', '$address', '$description')";
    $result = mysqli_query($conn, $sql);
    var_dump($result);

?>