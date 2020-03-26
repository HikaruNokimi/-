<?php
$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';
$pdo=new PDO($dsn,$user,$password, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));

$sql= $pdo->prepare("INSERT INTO tb210803db(id,name,comment) VALUES('2',:name, :comment)");
$sql->bindParam(':name',$name, PDO::PARAM_STR);
$sql->bindParam(':comment',$comment, PDO::PARAM_STR);
$sql->bindParam(':id',$id, PDO::PARAM_INT);
$id='id';
$name='name';
$comment='comment';
$sql->execute();
?>