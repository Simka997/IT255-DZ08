<?php

include ("db-config.php");

function addUser($username, $password) {
    global $conn;
    $insert = "INSERT INTO korisnik (username,password) VALUES (?,?)";
    $query = $conn->prepare($insert);
    $query->bind_param('ss',$username,md5($password));
    $query->execute(); 
    $query->close();
}


function checkAlreadyExistUsername($username){
    global $conn;
    $sql = "SELECT * FROM korisnik WHERE username=?";
    $query = $conn->prepare($sql);
    $query->bind_param('s',$username);
    $query->execute();
    $query->store_result();
    if ($query->num_rows > 0) {
        return 1;
    } else{
        return 0;
    }
}

function checkLogIn($username,$password){
    global $conn;
    $sql = "SELECT * FROM korisnik WHERE username=? AND password=?";
    $query = $conn->prepare($sql);
    $query->bind_param('ss',$username,md5($password));
    $query->execute();
    $query->store_result();
    if ($query->num_rows > 0) {
        return 1;
    } else{
        return 0;
    }
}

?>