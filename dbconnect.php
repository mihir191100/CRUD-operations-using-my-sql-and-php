<?php
    function OpenCon()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "Exp4";
        $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db) or die("Connection failed: %s\n".$conn->error);
        return $conn;
    }
    function CloseCon()
    {
        $conn->close();
    }
?>