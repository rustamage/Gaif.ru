<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">
    <script src="libjs/jsfunction.js"></script>
    
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
                    <h2> Примеры скриптов на PHP: </h2>
                    <?php
                        //phpinfo();
                        include 'libphp/phpfunctions.php';
                        $num1 = mt_rand(1, 1000);
                        $num2 = mt_rand(1, 1000);
                        $res = $num1 + $num2;
                        echo "<h3 style='text-align: left;'> 1) сумма чмсел $num1 + $num2 = $res </h3>";  

                        $len=mt_rand(2, 10);
                        $pass=generateString($len);

                        echo "<h3 style='text-align: left;'> 2) Сгенерированный пароль строка (длинна $len): $pass </h3>";
                        
                    ?>

                    <h3 style="text-align: left;">
                    3) Сумма двух чисел (JS): 
                    <span id="num1">num1</span> и
                    <span id="num2">num2</span> =
                    <span id="sum_result">sum</span>
                    </h3>

                    <?php
                        echo "<script>
                            let n1 = setElement('num1', generateNumber(1000,1))
                            let n2 = setElement('num2', generateNumber(1000,1))
                            setElement('sum_result', sumTwoNumbers (n1, n2))

                        </script>";

                        $ber22 = mt_rand(1, 1000);
                        echo "<h3 style='text-align: left;'> 4) Число $ber22 : имеет делители: ";
                        $massnum = [];
                        for ($i = 1; $i < $ber22; $i++){
                            if ($ber22 % $i == 0){
                                echo "$i,";

                            }
                        }


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
