<?php

function dbConnect(){
    $db = new mysqli("localhost","root","wessman","md");
    if (mysqli_connect_errno($db))
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    else
        return $db;
}

function getAllUsers() {
    $db = dbConnect();
    $i = 0;
    $users = null;
    $selectRow = mysqli_query($db, "SELECT * FROM users");
    $rows = mysqli_fetch_assoc($selectRow);

    foreach($rows as $row) {
        $users[$i] = array("user_id" => $row["id"], "firstname" => $row["firstname"], "lastname" => $row["lastname"], "mail" => $row["mail"], "address" => $row["address"], "city" => $row["city"]);
        $i++;
    }
    return $users;
}

?>