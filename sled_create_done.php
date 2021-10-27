<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body align="center">
    
<div class="logo">
<a href="sled.php">はて版</a><br />
<br />
<br />
</div>

<?php
    try{
        $sledname=$_POST['sledname'];
        $name=$_POST['name'];
        $text=$_POST['text'];
     

       

        $dsn='mysql:dbname=sled;host=localhost';
        $user='root';
        $password='root';
        $dbh= new PDO($dsn,$user,$password);
        $dbh->query('SET NAMES utf8');
        $sql='insert into sled(sledname,name,text)VALUES(?,?,?)';
        $stmt = $dbh->prepare($sql);
        $data[]=$sledname;
        $data[]=$name;
        $data[]=$text;
        $stmt->execute($data);

        $dbh=null;
        echo"作成完了";
    }
    catch(exception $e){
        print "エラー";
        exit();
    }
    echo '<a href="sled_contents.php?sledname='.$sledname.'">戻る</a>';
   
    ?>
    </body>
</html>