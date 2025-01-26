
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
            
    <div id="page">
        
        <div id="header">
            <h1> Гайфутдинов Рустам Рафильевич (веб-разработчик) </h1>
        </div>   
    

        <div id="main">
            <div id="menu">
                <h3>
                    <p> <a href="index.html">Главная</a></p>
                    <p> <a href="jsexample.html">Примеры</a></p>
                    <p> <a href="colorcalcform.html">Форма цвета</a></p>
                    <p> <a href="hello.php">Hello PHP</a></p>                   
                 
                </h3>
            </div>

            <div id="content">
                <?php
                    echo "<h1> Hello from PHP!<h1>";
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