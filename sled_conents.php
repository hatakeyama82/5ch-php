<?php
$sledname=$_POST['sledname'];


$dsn='mysql:dbname=sled;host=localhost';
$user='root';
$password='root';
$dbh= new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');
$sql='select number,sledname,name,text from sled where sledname==$sledname';
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

    print $rec['number'];
    print $rec['name'];
    print $rec['text'];
    echo "<br />";
 }




 ?>