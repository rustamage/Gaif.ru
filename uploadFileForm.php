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
                    <h2>Форма для закгрузки файла на сервер</h2>

                    <?php
                        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            if($_FILES['filename']['size'] > 1024*3*1024){
                                echo "ERROR: TOO BIGGY FILE";
                            }
                            else{
                                if(is_uploaded_file($_FILES['filename']['tmp_name'])){
                                    move_uploaded_file($_FILES['filename']['tmp_name'], $_FILES['filename']['name']);
                                    echo "файл загружен, можно еще один ";
                                }
                                else{
                                    echo "Файл не загружен -_-";
                                }
                            }
                        }
                    ?>

                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" >
                        <input type="file" name="filename" id= "">
                        </br>
                        <input type="submit" value="Загрузить" >


                    </form>
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