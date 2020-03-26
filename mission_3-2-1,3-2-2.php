<!DOCTYPE html>
<meta charset="UTF-8">
<html lang="ja">

<p>掲示板</p>

<form action="mission_3-2-1,3-2-2.php" method="post">
<p>名前： <input type="text" name="name"></p>
<p>コメント： <input type="text" name="comment"></p>
<p><input type="submit" value="送信"></p>
</form>

<?php
$filename="mission_3-2-1,3-2-2.txt";

//↓if (file_exists($filename))//一旦無視

if ($_SERVER['REQUEST_METHOD']=='POST'){
 $name=$_POST["name"];
 $comment=$_POST["comment"];
 $date=date("Y/m/d H:i:s");

  if (file_exists($filename)){
   $num=count(file($filename))+1;
  }else{
   $num=1;
  }
}

if(!empty($name)||!empty($comment)){
 $fp=fopen($filename,"a");
 fwrite($fp,$num.' '.$name.' '.$comment.' '.$date."\n");
 fclose($fp);
}

 $lines = file($filename);
   foreach ($lines as $l){
      echo $l.'<br>';
}
?>

</html>