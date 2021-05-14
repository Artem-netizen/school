<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        // Проверяем правильность ввода почты пользователем
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){  //Если почта верная
            //Проверим, есть ли email в нашей базе данных
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){ //если электронная почта уже существует
                echo "$email - Адрес электронной почты уже существует!";
            }else{
                //Проверяем, загрузил ли пользователь файлы
                if(isset($_FILES['image'])){ //Если файлы загружены
                    $img_name = $_FILES['image']['name']; //получение загруженного пользователем img
                    $tmp_name = $_FILES['image']['tmp_name']; //это временное имя используется для сохранения файла
                //какой формат изображения
                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode); //здесь мы получаем расширение загруженного пользователем файла изображения

                $extensions = ['png', 'jpeg','jpg'];
                if(in_array($img_ext, $extensions) === true){
                    $time = time();
                    $new_img_name = $time.$img_name;
                    
                    if(move_uploaded_file($tmp_name, "images/".$new_img_name)){
                        $status = "Активен сейчас";
                        $random_id = rand(time(), 10000000); //создание рандомныъ айдишников

                        $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
                                            VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");
                        if($sql2){ //если эти данные вставлены
                            $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                            if(mysqli_num_rows($sql3) > 0){
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id'] = $row['unique_id']; //Используя эту сессию мы получаем unique_id в рhр файле
                                echo "Успешно";
                            }
                        }else{
                            echo "Что-то пошло не так..!";                            
                        }
                    }

                }else{
                    echo "Пожалуйста, выберите изображения для загрузки - jpeg, png, jpg!";
                }
                }else{
                    echo "Пожалуйста, выберите файлы для загрузки!";
                }
            }
        }else{
            echo "$email - Почта введена не верно!";
        }
    }else{
        echo "Все поля ввода обязательны!";
    }
?>