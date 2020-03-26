<!DOCTYPE html>
<meta charset="UTF-8">
<html lang="ja">

<form action="mission_2-3.php" method="post">
<input type="text" name="comment" value="コメント">
<input type="submit" value="送信">
</form>

<?php
  $filename="mission_2-3.txt";
  $fp=fopen($filename,"a");

  if (!empty($_POST["comment"])){
     $naiyou=$_POST["comment"];
     fwrite($fp,$naiyou . PHP_EOL);
     fclose($fp);
     echo "";

    switch($naiyou):
  case "完成！":
  echo "おめでとう！";
  break;

  default:
  echo ($_POST["comment"]."を受け付けました");
  break;
endswitch;
}
?>
</html>