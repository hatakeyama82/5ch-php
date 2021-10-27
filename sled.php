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
<div class="sled">
        <h1><article>はて版</article></h1>
        <section><p>どんな話題でも結構です</p>
        <p>人に迷惑のかからない範囲で楽しみましょう</p>
</div>         
</p></section>
        <br>
        <br>
        <a href="sled_list.php">スレッド一覧</a>
         <!--スレッド名とurl -->
        <a href="#create">新規スレ作成</a><br />
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
         <?php

$dsn='mysql:dbname=sled;host=localhost';
$user='root';
$password='root';
$dbh= new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');
$sql='select DISTINCT sledname from sled where 1 limit 5';

$stmt = $dbh->prepare($sql);
$stmt->execute($data);

$dbh=null;



while(true)
{
    $rec=$stmt->fetch(PDO::FETCH_ASSOC);
    
    if($rec==False)
   {
       break;
   }
 
  

   echo '<a href="sled_contents.php?sledname='.$rec['sledname'].'">'.$rec['sledname'].'</a>';
   
   echo "<br />";
 
}
?>
        <form method="post" action="sled_create.php">
        <p id="create">新規スレッド作成</p>
        <table align="center">
        <tr>
            <td>スレッド名 </td>
            <td><input type="text" name="sledname"></td>
</tr>
        <tr>
            <td>名前 </td>
            <td><input type="text" name="name"></td>
</tr>
</table>
        <input type="text" name="text" size="80" maxlength="1000" style="height:200px;" ><br>
        <input type="submit" value="送信">
        
</form>
</body>
</html>