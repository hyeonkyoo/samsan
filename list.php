<?php

    include "config.php";

    $sql ="select * from samsan";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result)){

        echo("<a href=\"list.php?id=$row[id]\">". $row['name'] . "</a><br>");
    }
if(isset($_GET['id'])){

    $sql = "select * from samsan where id={$_GET['id']}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    echo("<ol>");

    echo("<li>" . $row['name'] . "<br>");
    echo("<li>" . $row['age']. "<br>");
    echo("<li>" . $row['job'] . "<br>");
    echo("<li>" . $row['address'] . "<br>");
    echo("<li>" . $row['phone'] . "<br>");
    echo("<li>" . nl2br($row['description']) . "<br>");

    echo("</ol");

}

?>