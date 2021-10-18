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
        $data[]=$date;
        $stmt->execute($data);

        $dbh=null;

    }
    catch(exception $e){
        print "エラー";
        exit();
    }
    ?>
    <a href="">戻る</a>