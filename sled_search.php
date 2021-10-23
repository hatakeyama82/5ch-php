<a href="sled.php">はて版</a><br />
<?php
$sled=$_POST['sled'];

$dsn='mysql:dbname=sled;host=localhost';
 $user='root';
 $password='root';
 $dbh= new PDO($dsn,$user,$password);
 $dbh->query('SET NAMES utf8');
 $sql='select DISTINCT sledname from sled where sledname=? ';
 $stmt = $dbh->prepare($sql);
 $data[]=$sled;
 $stmt->execute($data);

 $dbh=null;

 echo 'スレッド検索結果<br />';

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