<html>

 <form action="mission_3-2.php"method="post">
      <label>名前    <input type="text"name="name"></label><br>
      <label>コメント<input type="text"name="comment"></label><br>

      <input type="submit"value="送信ボタン">
 </form>

 

</html>



<?php

 $postnumber=0;  //変数の名前自分がわかるやつにしないと後で死ぬ
 if(isset($_POST['name']) and isset($_POST['comment'])){//issetはなんか 空じゃないかチェックするみたいなアレ

 $name=$_POST['name'];
 $comment=$_POST['comment'];

 $postnumber;//これようわからん
 $time=date('Y-m-d H:i:s');

 $filename="mission_3-2.txt";
 $fp=fopen($filename,"a");
 $file=file($filename); //テキストファイル出現しない→ファイル名を確認しろ

 $postnumber=count($file)+1;//fileの最後のコメントに番号を一個ずつ足してんだよ

 $post=$postnumber."<>".$name."<>".$comment."<>".$time;//<>はつなぎ

 fwrite($fp,$post."\n");//\ｎはエスケープシーケンス「改行、復帰」
 fclose($fp);

 echo"<br/>投稿を受け付けました。<br/>";

 foreach($file as $value){
 $post=explode("<>",$value);//

 echo$post[0].".".$post[1]."さんの投稿".
 $post[3]."<br/>";

 echo$post[2]."<br/>";

 }

 }

?>