<?php 

//課題1:期待する出力になるようにコードを追加しましょう(foreach文を使用してください)

//ブラジル: 100人
//日本: 150人
//スペイン: 50000人

echo "課題１" . "<br>";

//連想配列
$countries = [
    "ブラジル" => 100,
    "日本" => 150,
    "スペイン" => 50000
];

foreach ($countries as $country => $count){
  echo $country . "：" . $count . "人";
  echo "<br>";
}

echo "<br>" . "課題２" . "<br>";

//課題2:値が2以上の動物の名前を改行区切りで出力するコードにしましょう

//ねこ
//うさぎ
//さい


$animals1 = ["いぬ" => 1, "ねこ" => 2, "うさぎ" => 6];
$animals2 = ["ぞう" => 1, "きりん" => 1, "さい" => 4];
$animalsList = ["小動物" => $animals1, "大動物" => $animals2];

foreach ($animalsList as $animals){
  foreach ($animals as $animalname => $animalcount ){
    if ($animalcount >= 2){
      $targetlist[] = $animalname;
    }
  }
}

echo implode("<br>", $targetlist);