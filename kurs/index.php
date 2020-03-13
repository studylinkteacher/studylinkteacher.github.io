<!DOCTYPE html>
<meta charset="UTF-8">
<html>
    <head>
        <script>
            function help(){
                elem = document.getElementById("menu");
               if(!document.body.classList.contains("button-active")) {  document.body.classList.add('button-active');
                    elem.classList.add('menuactive');                                                          
               }
                else {  document.body.classList.remove('button-active'); elem.classList.remove('menuactive');  }
            }
            
               </script>
        <link rel="stylesheet" href="style/index_style.css">
        <title>
            Головна
        </title>

    </head>
    <body>
        <div class="menu " id="menu">
        
            <a href="#" class="nav-btn">Пункт</a>        
            <a href="#" class="nav-btn">Пункт</a>        
            <a href="#" class="nav-btn">Пункт</a>        
       
            </div>
            <a class="button" onclick="help()" >
                <span></span>
    
                
                
                </a>
                <div class="user_info">
                    
                    <div class="user_name"><a href="#" class="info_button">User_Name</a></div>
                    <img src="style/images/div_fon.jpg" class="avatar">
                
                        
                </div>
        <header>
         
            <h1 align="center">Study System</h1>
            <h2>Enjoy new perfomance</h2>

        </header>
        <div class="div1"></div>
    </body>
<?php
$host = 'localhost'; // адрес сервера 
$database = 'test'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
    $query ="SELECT * FROM testone";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<table><tr><th>Id</th><th>Модель</th><th>Производитель</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>"; }
    ?>
