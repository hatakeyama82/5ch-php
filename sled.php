<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
       
        <a href="sled.php">はて版</a><br />
     
        <form action="sled_search.php"method="post">
        <table align="right">
           
        <td><p>スレッド検索</p><td>
        <td><input type="text" name="sled"><td>
        <td><input type="submit" value="検索"><td>   
</form>   
    
</tr>
</table>
</header>
<br>
<br>
        <h2><article>はて版</article>
        <section><p>
            なんでもいいのだ||:3ミ
</p></section>
        <br>
        <br>
        <a href="sled_list.php">スレッド一覧</a>
         <!--スレッド名とurl -->
        <a href="#create">新規スレ作成</a>
        <!-- スレッド名、最新書き込み4件　*5 -->
        <?php

         $dsn='mysql:dbname=sled;host=localhost';
         $user='root';
         $password='root';
         $dbh= new PDO($dsn,$user,$password);
         $dbh->query('SET NAMES utf8');
         $sql='insert into sled(sledname,name,text)VALUES(?,?,?)';
         $stmt = $dbh->prepare($sql);
         ?>
        <form method="post" action="sled_create.php">
        <p id="create">新規スレッド作成</p>
        <table>
        <tr>
            <td>スレッド名 :</td>
            <td><input type="text" name="sledname"></td>
</tr>
        <tr>
            <td>名前 :</td>
            <td><input type="text" name="name"></td>
</tr>
</table>
        <input type="text" name="text" size="80" maxlength="1000" style="height:200px;" ><br>
        <input type="submit" value="送信">
        
</form>
</body>
</html>