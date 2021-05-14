<?php
    $conn =  mysqli_connect("localhost", "root", "", "chat");
    if(!$conn){
        echo "База данных успешно подключена" . mysqli_connect_error();
    }
?>