<?php
$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';
$pdo=new PDO($dsn,$user,$password, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));

$id=15;
$sql='delete from tb210803db where id=:id';
$stmt= $pdo->prepare($sql);
$stmt->bindParam(':id',$id, PDO::PARAM_INT);
$stmt->execute();

$sql='SELECT * FROM tb210803db';
$stmt=$pdo->query($sql);
$results=$stmt->fetchAll();
foreach ($results as $row){
   echo $row['id'].',' ;
   echo $row['name'].',' ;
   echo $row['comment'].'<br>' ;
echo "<hr>";
}
?>