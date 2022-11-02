<?php
    $conn = mysqli_connect("localhost", "root","", "container");

    if(!$conn) {
        die("gagal terhubung". mysqli_connect_error());
    }

?>