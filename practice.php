<?php
$name = "JUN";
if ($name = "JUN") {
  echo "私は　あなたの名前です";
} else {
  echo "あなたの名前ではありません";
}
?>

<?php
$total = 0;
echo $total;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
?>

<?php
$fruits = array("strawberry","banana","orange","melon","peach");
foreach($fruits as $fruits){
    echo "要素は" . $fruits;
    echo "\n";
}
?>

<?php
/* for文の始めの値を定義する /

/* for文の終わりの値を定義する */
$end = 100;

for ($i = 1; $i <= $end; $i++) {

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i ;
  }
}
?>