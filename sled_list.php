<a href="sled.php">はて版</a><br />
<?php

 $dsn='mysql:dbname=sled;host=localhost';
 $user='root';
 $password='root';
 $dbh= new PDO($dsn,$user,$password);
 $dbh->query('SET NAMES utf8');
 $sql='select DISTINCT sledname from sled where 1';
 $stmt = $dbh->prepare($sql);
 $stmt->execute($data);

 $dbh=null;

 echo 'スレッド一覧<br />';

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