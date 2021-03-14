<?php

// 文字列の長さ
// マルチバイト　日本語　SJIS, UTF-8 １文字3バイト

$text ='あいうえお';

echo strlen($text); //15 3*5
echo('<pre>');
//var_dump($text);
echo mb_strlen($text); //５



$array =['りんご','みかん'];
array_push($array,'虎徹', '銀');
echo('<pre>');
var_dump($array);
echo('<pre>');

//ユーザ定義関数




?>