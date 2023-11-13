<?php
require_once('config.php');
function connection(){
    $connect = mysqli_connect("localhost","resultGrader","resultGrader","rms");
    if($connect){
        return $connect;
    }else{
        die("db connection failed".mysqli_connect_error(connect));
    }
}
function query($sql){
    $query = mysqli_query(connection(),$sql);
    if($query){
        return $query;
    }else{
        die("<p>unable to process your request.this failure must occur due to the following reasons.
            <ul>
            <li>multiple entries of file with the same data</li><li>invalid data from file</li><li>error code 001</li>
            </ul>
            please check and correct this issues and try again.
            </p>".mysqli_connect_error(connection()));
    }
}
?>