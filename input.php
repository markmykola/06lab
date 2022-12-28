<?php
if(isset($_POST["firstname"]) && isset($_POST["eduform"]) && 
    isset($_POST["comment"]) && isset($_POST["courses"])) 
{
    $name = htmlentities($_POST["firstname"]);
    $eduform = htmlentities($_POST["eduform"]);
    $hostel = "ні";
    if(isset($_POST["hostel"])) $hostel = "так";
    $comment = htmlentities($_POST["comment"]);
    $courses = $_POST["courses"];
    $output ="
    <html>
    <head>
    <title>Анкетні данні</title>
    </head>
    <body>
    Вас звати: $name<br />
    Форма навчання: $eduform<br />
    Потрібний гуртожиток: $hostel<br />
    Вибранні курси:
    <ul>";
    foreach($courses as $item)
        $output.="<li>" . htmlentities($item) . "</li>";
    $output.="</ul></body></html>";
    echo $output;
}
else
{   
    echo "Введені дані не корекнтні";
}
?>