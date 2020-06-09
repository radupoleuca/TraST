<?php
    //$conn = mysqli_connect("localhost","root","","trastDB");
    $conn = mysqli_connect("fenrir.info.uaic.ro","trastDB","OTuQEKdt8O","trastDB");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>