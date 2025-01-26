<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    
    
    <title>Document</title>
</head>

    <body>
    <div class="blurry-background"></div>        
    <div id="page">
        
        <div id="header">
            <h1> Гайфутдинов Рустам Рафильевич (веб-разработчик) </h1>
        </div>   
    

        <div id="main">
            <div id="menu">
                <h3>
                    <p> <a href="index.html">Главная</a></p>
                    <p> <a href="jsexample.html">Примеры JS</a></p>
                    <p> <a href="colorcalcform.html">Форма цвета</a></p>
                    <p> <a href="phpexamples.php">Примеры PHP</a></p>  
                    <p> <a href="calcform.php">Калькулятор PHP</a></p>
                    <p> <a href="uploadFileForm.php"> Загрузка файла</a></p>
                    <p> <a href="registrationForm.html">Форма регистрации</a></p>
                    <p> <a href="weather.html">Погода в городе</a></p>
                 
                </h3>
            </div>

            <div id="content">
                    <?php

                       if($_POST){
                            $firstname=trim($_POST['firstName']);
                            $lastname=trim($_POST['lastName']);
                            $Surname=trim($_POST['Surname']);
                            $email=trim($_POST['email']);
                            $age=trim($_POST['age']);
                            $city=trim($_POST['city']);
                            $pass=trim($_POST['pass']);
                            $pass_r=trim($_POST['pass_r']);
                            $gender=trim($_POST['gender']);
                            echo "<br> Данные: $firstname,  $lastname, $Surname, $email, $age, $city, $pass, $pass_r, $gender";
                            $error=false;
                            $errortext="<p><b> <font color='red'> При регистрации возникли ошибки</font><b><p> <ul>";
                        
                            if(empty($email)){
                                $error=true;
                                $errortext.="<li><font color='red'> Вы не заполнили поле email! </font><li>";
                            }
                            if(!preg_match("/^[-0-9a-z_\.]+@[-0-0a-z^\.]+\.[a-z]{2,4}$/i", $email)){
                                $error=true;
                                $errortext.="<li><font color='red'> Поле email не корректнно </font><li>";
                            }
                            if(empty($firstname)){
                                $error=true;
                                $errortext.="<li><font color='red'> Вы не заполнили поле имя! </font><li>";
                            }
                            if(empty($lastname)){
                                $error=true;
                                $errortext.="<li><font color='red'> Вы не заполнили поле фамилия! </font><li>";
                            }
                            if(empty($Surname)){
                                $error=true;
                                $errortext.="<li><font color='red'> Вы не заполнили поле отчество! </font><li>";
                            }
                            if(empty($age)){
                                $error=true;
                                $errortext.="<li><font color='red'> Вы не заполнили поле возраст! </font><li>";
                            }
                            if(empty($city)){
                                $error=true;
                                $errortext.="<li><font color='red'> Вы не заполнили поле город! </font><li>";
                            }
                            if(empty($pass)){
                                $error=true;
                                $errortext.="<li><font color='red'> Вы не заполнили поле пароль! </font><li>";
                            }
                            if(!preg_match("/^[a-zA-Z0-9]{3,20}$/i", $pass)){
                                $error=true;
                                $errortext.="<li><font color='red'> Убедитесь то что пороль без лишних символов! </font><li>";
                            }
                            if($pass!=$pass_r){
                                $error=true;
                                $errortext.="<li><font color='red'> Пороли не совпадают </font><li>";
                            }

                            if($error){
                                echo $errortext;
                            }
                                else{
                                    //Подключиться к БД

                                    include ('libphp/pdoConnectDB.php');
                                    try{
                                        $pdo = pdoConnectDB();

                                        $sql = "select user_id from users where email='$email'";
                                        $statement = $pdo->query($sql);
                                        if($statement->rowCount()!=0){
                                            echo "<br> Извините, данный email занят";
                                        }
                                        else{

                                            $sql = "insert into users (email, firstname, lastname, password, age, gender, city, Surname)
                                            values ('$email', '$firstname', '$lastname', '$pass', $age, '$gender', '$city', '$Surname')";

                                            $statement = $pdo->prepare($sql);
                                            $statement -> execute();

                                            $pdo=null;
                                            $statement=null;

                                            echo "<br>Пользователь зарегестрирован<br>";
                                        }
                                    } catch(PDOException $e){
                                        echo "<br> Connection to DB FAILED:". $e->getMessage();
                                    }
                                    $pdo=pdoConnectDB();
                                }
                            }    
                        echo "<br> <a href='getAllRegisteredUsers.php'>Список всех зарегестрированных пользователей</a>";
                    ?>
            </div>
        </div>
        
        <div id="projects">
                <h2>Примеры выполненных мною проектов </h2>
        </div>
        
        <div class="block1">Проект1</div>
        <div class="block2">Проект2</div>
        <div class="block3">Проект3</div>  
    
    </div>  

</body>

</html>