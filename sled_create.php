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
$sledname=$_POST['sledname'];
$name=$_POST['name'];
$text=$_POST['text'];
?>
<form method="post" action="sled_create_done.php">
<div align="center">
<?php
if(empty($sledname)){
   echo 'スレッド名を入力してください<br />';
}
else{
    ;
}

if(empty($text)){
    echo'内容を入力してください<br />';
}
else{
    ;
}
if(strlen($sledname)>30){
    echo'スレッド名を30文字以下にしてください<br />';
}
if(strlen($name)>20){
    echo'名前を20文字以下にしてください<br />';
}
if(strlen($text)>500){
    echo'内容を500文字以下にしてください<br />';
}
if(empty($sledname) || empty($text) || strlen($sledname)>30 || strlen($name)>20 || strlen($text)>500){
    echo'<input type="button"onclick="history.back()" value="戻る">';
}
else{






if(empty($name)){
    $name='名無しさん';
}
else{
    ;
}
echo '<p>以下の内容で作成します</p>';
echo 'スレッド名: '.$sledname."<br />";
echo '名前: '.$name."<br />";
echo '内容: '.$text."<br />";



echo '<input type="submit" value="OK">';
echo '<input type="button"onclick="history.back()" value="戻る">';

echo '<input type="hidden" name="sledname" value="'.$sledname.'">';
echo '<input type="hidden" name="name" value="'.$name.'">';
echo '<input type="hidden" name="text" value="'.$text.'">';

}
?>

</div>
</form>
</body>
</html>