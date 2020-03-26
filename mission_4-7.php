<?php
$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';
$pdo=new PDO($dsn,$user,$password, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));

$id=1;
$name="m";
$comment="運動する";
$sql='update tb210803db set name=:name,comment=:comment where id=:id';
$stmt= $pdo->prepare($sql);
$stmt->bindParam(':name',$name, PDO::PARAM_STR);
$stmt->bindParam(':comment',$comment, PDO::PARAM_STR);
$stmt->bindParam(':id',$id, PDO::PARAM_INT);
$stmt->execute();

/*$sql='SELECT * FROM tb210803db';
$stmt=$pdo->query($sql);
$results=$stmt->fetchAll();
foreach ($results as $row){
   echo $row['id'].',' ;
   echo $row['name'].',' ;
   echo $row['comment'].'<br>' ;
echo "<hr>";
}*/
?>