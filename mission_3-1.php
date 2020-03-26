<!DOCTYPE html>
<meta charset="UTF-8">
<html lang="ja">

<form action="mission_3-1.php" method="post">
<p>名前： <input type="text" name="name"></p>
<p>コメント： <input type="text" name="comment"></p>
<p><input type="submit" value="送信"></p>
</form>

<?php
$filename="mission_3-1.txt";

if($_SERVER['REQUEST_METHOD']=='POST'){
 $name=$_POST["name"];
 $comment=$_POST["comment"];
 $date=date("Y/m/d H:i:s");
 $num=count(file($filename));
 $num++;

 $fp=fopen($filename,"a");
 fwrite($fp,$num.'<>'.$name.'<>'.$comment.'<>'.$date."\n");
 fclose($fp);
}

?>
</html>