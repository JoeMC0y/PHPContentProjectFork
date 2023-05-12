<?php
DEFINE('DB_USER','root');
DEFINE('DB_PSWD', 'P@r7y');
define('DB_SERVER', 'localhost');
define('DB_NAME', 'table1');

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
    $query = "select * from new_table where username =".$username." and password = ".$password.";";
    return @mysqli_query($dbConn,$query);
}

function addUsers($dbConn,$username,$password){
    $query ="insert into new_table (userId ,username, password, isAdmin)values(2,".$username.",".$password.", false);";
    return @mysqli_query($dbConn,$query);
}

function getAdmin($dbConn,$username,$password){
    $query = "select * from new_table where username =".$username." and password = ".$password."and isAdmin = true;";
    return @mysqli_query($dbConn,$query);
}

function addAdmin($dbConn,$username,$password){
    $query ="insert into new_table (userId ,username, password, isAdmin)values(2,".$username.",".$password.", true);";
    return @mysqli_query($dbConn,$query);
}
?>