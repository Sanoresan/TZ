<?php 
    require_once 'conn.php';

    $link = mysqli_connect($host,$user,$password,$database) or die("Ошибка " . mysqli_error($link));

    $simb ="qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
    $chisl = "1234567890";
    $sichi = "qwertyuiopasdfghjklzxcvbnm1234567890QWERTYUIOPASDFGHJKLZXCVBNM";
    if($_POST['submit'] && $_POST['vibor']=='simb' )
    {
        $lenght = (int)$_POST['text'];
        $randomm = null;
        while($lenght--)
        $randomm.=$simb[rand(0,strlen($simb)-1)];
        $sql = "INSERT INTO genid (textt) VALUES ('$randomm')";
        mysqli_query($link, $sql);
        echo json_encode(array('text' =>$randomm));
    }
        elseif ($_POST ['submit'] && $_POST['vibor']=='chisl') 
        {
        $lenght = (int)$_POST['text'];
        $randomm = null;
        while($lenght--)
        $randomm.=$chisl[rand(0,strlen($chisl)-1)];
        $sql = "INSERT INTO genid (textt) VALUES ('$randomm')";
        mysqli_query($link, $sql);
        echo json_encode(array('text' =>$randomm));
        }
        elseif ($_POST ['submit'] && $_POST['vibor']=='sichi')
        {
        $lenght = (int)$_POST['text'];
        $randomm = null;
        while($lenght--)
        $randomm.=$sichi[rand(0,strlen($sichi)-1)];
        $sql = "INSERT INTO genid (textt) VALUES ('$randomm')";
        mysqli_query($link, $sql);
        echo json_encode(array('text' =>$randomm));
        }

?>
<!--  Для вашего удобства)
<form action="" method = "post">
    <meta charset="UTF-8">
    <select method = "post" name="vibor">
    <option value="chisl">Числовой
    <option value="simb">Символьный
    <option value="sichi">числовой-символьный
    </select>
    <label for="textbox">Введите длинну</label>
    <input type="textbox" require name = "text">
    <input type="submit" name = "submit" value="Сгенерировать">
</form> -->