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
$sledname=$_GET['sledname'];
?><h1><?php
echo $sledname."<br />";?></h1>
<?php
$number=0;

$dsn='mysql:dbname=sled;host=localhost';
$user='root';
$password='root';
$dbh= new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');
$sql='SELECT sledname,name,text FROM sled WHERE sledname=?';
$stmt = $dbh->prepare($sql);
$data[]=$sledname;
$stmt->execute($data);



$name=$rec['name'];
$text=$rec['text'];

$dbh=null;

while(true)
 {
     $rec=$stmt->fetch(PDO::FETCH_ASSOC);
   
     $name=$rec['name'];
     $text=$rec['text'];
     if($rec==False||$number>999)
    {
        break;
    }
    echo'<div class="res">';
    echo'<div name="number">';
    echo ++$number;
    echo'</div>';
    echo "         ";  
    echo $name."<br />";
    echo $text."<br />";
    echo'</div>';
   
  

   
 }
 

 ?>
 <form method="post" action="sled_create.php">
        <p id="create">書き込み</p>
        <table align="center">
      
            
         <?php
        echo'<input type="hidden" name="sledname"value="'.$sledname.'">';
         
        ?>

        <tr>
            <td>名前 :</td>
            <td><input type="text" name="name"></td>
</tr>
</table>
        <textarea name="text" rows="8" cols="70" ></textarea><br>
        <input type="submit" value="送信">
        
</form>
</body>
</html>
