<?php
  $age = 20;
  if ($age >= 18) {
          echo "自動車免許が取れます<br>";
  }
?>

<?php
  $age = 20;
  if ($age >= 18){
          echo "自動車免許が取れます<br>";
  } else {
          echo "自動車免許はまだ取得できません<br>";
  }
?>

<?php
  $age =20;
  if ($age >= 85 ) {
          echo "免許を返納しませんか？<br>";
  } elseif ($age >= 18){
          echo "自動車免許が取れます<br>";
  } else {
          echo "自動車免許はまだ取得できません<br>";
  }
?>