<?php

function dbConnect(){
    $db = new mysqli("localhost","185404_hq94390","wesscorp","185404-md");
    if (mysqli_connect_errno($db))
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    else {
        return $db;
        echo "Lyckades!";
    }


}

function getAllUsers() {
    $db = dbConnect();
    $i = 0;
    $users = null;
    $sql = "SELECT * FROM user";
    $selectRows = $db->query($sql);
    $rows = $selectRows->fetch_assoc();

    foreach($rows as $row) {
        $users[$i] = array("user_id" => $row["id"], "firstname" => $row["firstname"], "lastname" => $row["lastname"], "mail" => $row["mail"], "address" => $row["address"], "city" => $row["city"]);
        $i++;
    }
    return $users;
}

?>