<?php
require_once 'conn.php';

$link = mysqli_connect($host,$user,$password,$database) or die("Ошибка " . mysqli_error($link));

if($_GET['submit'])
{
    $ID = (int)$_GET['text'];
    $sql = "SELECT textt from genid where ID = '$ID'";
     $otv = mysqli_query($link, $sql)->fetch_assoc()['textt'];
     echo json_encode(array('text' => $otv));
}

?>

<!-- Для вашего удобства)
     <form action="" method = "post">
    <meta charset="UTF-8">
    <label for="textbox">Введите ID</label>
    <input type="textbox" require name = "text">
    <input type="submit" name = "submit" value="Вызвать">

</form> -->
