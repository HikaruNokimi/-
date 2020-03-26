<?php
  $year_start = 2000;
  $year_now = 2020;

  for ( $i=$year_start ; $i<= $year_now ; $i=$i+4 ){
          echo $i. "<br>";
  }
?>

<br>

<?php
  header("Content-Type: text/html; charset=Shift-JIS");
  $Shiritori = array("‚µ‚è‚Æ‚è","‚è‚ñ‚²","‚²‚è‚ç","‚ç‚Á‚Ï","‚Ï‚ñ‚¾");
  echo $Shiritori[2] . "<br/>";
  $ankiword = "";
  echo "<br/>";
  foreach ($Shiritori as $word) {
  $ankiword = $ankiword . $word;
  echo $ankiword . "<br/>";
  }
  ini_set("mbstring.internal_encoding" , "UTF-8");
?>