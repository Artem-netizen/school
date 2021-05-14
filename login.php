<?php
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    if(!empty($email) && !empty($password)){
        // Проверяем введенные пользователем почту и пароль
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email =  '{$email}' AND password = '{$password}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $status = "Сейчас в сети";
            $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
            if($sql2){
                $_SESSION['unique_id'] = $row['unique_id']; //Используя эту сессию мы получаем unique_id в рhр файле
                echo "Успешно";
            }
        }else{
            echo "Логин или пароль неверны!";
        }
    }else{
        echo "Все поля обязательны к заполнению!";
    }
?>