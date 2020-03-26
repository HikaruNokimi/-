<?php
$dsn='データベース名';
$user='ユーザー名';
$password='パスワード'; //↓MySQLサーバへ接続
$pdo=new PDO($dsn,$user,$password, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));

$sql="CREATE TABLE IF NOT EXISTS tb210803db" // クエリーの実行
."("
."id INT AUTO_INCREMENT PRIMARY KEY,"
."name char(32),"
."comment TEXT"
.");";
$stmt=$pdo->query($sql);
//queryメソッドは指定したSQL文をデータベースに対して発行する
//その結果としてPDOStatementクラスのオブジェクトを返す
?>