<?php
    //connects to the database
    $conn = mysqli_connect('localhost', 'user', '1234', 'GoArt');

        // Check that connection exists
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
?>