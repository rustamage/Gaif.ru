<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
    
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
                    $output= '';
                    $num1=$_POST['n1'];
                    $num2=$_POST['n2'];
                    $op=$_POST['op'];
                    $output = "$num1 $op $num2 = ";
                    switch($op){
                        case '+': $output .=$num1+$num2;break;
                        case '-': $output .=$num1-$num2;break;
                        case '*': $output .=$num1*$num2;break;
                        case '/': 
                            if($num2==0)
                                $output = "На ноль делить нельзя";
                            else
                                $output .=$num1/$num2;
                            break;
                        default: $output = "Неизвестная операция: $op";
                    }
                    echo "<p> Посчитано:";
                    echo $output;

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