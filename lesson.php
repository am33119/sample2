<?php

$a = 3;
$b = 7;
echo $a + $b;

$array_month = ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'];
echo $array_month[7];

$hello = 'Hello,';
$name = 'sayaka';
$world = '‘s World!';
echo $hello.$name.$world;

$tech_boost = 'tech';
$tech_boost .= 'boost';
echo $tech_boost;

$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018[December];


$height = 160;
if ($height < 150) {
  echo '150cm 以下の方はご乗車できません。';
} else {
  echo 'ご乗車になれます';
}

$height = 230;
if ($height < 150) {
  echo '150cm 以下の方はご乗車できません。';
} elseif ($height > 200) {
  echo '200cm 以上の方はご乗車できません';
} else {
  echo 'ご乗車になれます。';
}

$weekday = '月曜';
switch ($weekday) {
  case '月曜':
  echo '可燃ごみの日です。';
  break;
  case '水曜':
  echo '資源ごみの日です。';
  break;
  default:
  echo '回収はありません。';
  break;
}

$weekday = "木曜";
// $weekday が月曜か木曜だったら「可燃ごみの日です。」、 水曜だったら「資源ごみの日です。」、それ以外だったら「回収はありません。」
// と表示したい
switch ($weekday) {
  case "月曜":
  case "木曜":
    echo "可燃ごみの日です。";
    break;
  case "水曜":
    echo "資源ごみの日です。";
    break;
  default:
    echo "回収はありません。";
    break;
}

$name = 'sayaka';
if ($name == 'sayaka') {
  echo '私は あなたの名前 です';
} else {
  echo 'あなたの名前ではありません';
}

$total = 0;
for ($i=1; $i<=10000; $i++) {
  $total += $i;
}
echo $total;

$fruits = array('apple','melon','cherry','banana','orange');
foreach ($fruits as $fruit) {
  echo $fruit;
}

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i=1; $i<=100; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}
