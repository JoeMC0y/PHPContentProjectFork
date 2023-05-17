<?php
DEFINE('DB_USER','root');
DEFINE('DB_PSWD', 'War3Fram~');
define('DB_SERVER', '127.0.0.1:3306');
define('DB_NAME', 'user');

function ConnGet(){
    $dbConn = @mysqli_connect(DB_SERVER,DB_USER,DB_PSWD,DB_NAME)
        or die('failed to connect to the db ' .db_server. "::" . DB_NAME. ' : '.mysqli_connect_error());
    return $dbConn;
}

//adding user query
//insert into new_table (userId ,username, password, isAdmin)values(2,'jack', '12345', true);
//chekcing user login query
//select * from new_table where username = 'mad' and password = '123';

function getUser($dbConn,$username,$password){
    $query = "select * from `users` where `username` = '" . $username . "' and `password` = '" . $password ."'" ;
    return @mysqli_query($dbConn, $query);
}

function addUsers($dbConn,$username,$password){
    $check = checkUser(ConnGet(), $username);
    
    if($check->num_rows > 0){
        return "Username already used."; 
    }else{
        $query ="insert into users (username, password, isAdmin)values('".$username."','".$password."', false)";
        return @mysqli_query($dbConn,$query);
    }



}

function getAdmin($dbConn,$username,$password){
    $query = "select * from `users` where `username` =".$username." and `password` = ".$password."and isAdmin = true";
    return @mysqli_query($dbConn,$query);
}

function addAdmin($dbConn,$username,$password){
    $check = checkUser(ConnGet(), $username);
    
    if($check->num_rows > 0){
        return "Username already used.";
    }else{

        $query ="insert into users (username, password, isAdmin)values('".$username."','".$password."', true)";
        return @mysqli_query($dbConn,$query);
    }
}

function checkUser($dbConn, $username){
    $query = "select * from `users` where `username` ='".$username."'";
    return @mysqli_query($dbConn, $query);
}
?>