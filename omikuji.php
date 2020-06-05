<?php
// phpタグの中身はサーバで実行される

// 乱数の生成
$rand = rand(1,5);

$array3 = ['','大吉','中吉','小吉','凶','大凶'];
$result = $array3[$rand];

// 条件分岐
// if($rand == 1){

//     $result = '大吉';

// }else if($rand == 2){

//     $result = '中吉';


    
// }else if($rand == 3){

//     $result = '小吉';


    
// }else if($rand == 4){

//     $result = '凶';


    
// }else if($rand == 5){

//     $result = '大凶';
    
// }else{

//     $result = "error";

// }

// echo $result;



// 動作確認


// PHPのあとにhtmlを追加しよう
// !->tabでフォーマット作成が可能（通常のhtmlファイルと同様）

// 動作確認
// サーバでPHPが実行->生成されたhtmlがブラウザに送られて表示される

// htmlと組み合わせるときはPHPタグを省略しないこと（PHPとhtmlの区別がつかなくなるため）
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>おみくじ</title>
</head>
<body>

    <h1>今日の運勢は<?= $result ?>です！！</h1>
    
</body>
</html>
