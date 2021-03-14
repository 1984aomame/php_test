<?php
/* function test(引数１, 引数2) {

    // 処理
     return //戻り値
 }
*/


// 引数なし　戻り値なし 
// returnの戻り値指定がないのでechoが処理される
function test() {
     echo 'テスト';
}

test();
echo('<pre>');

// インプット引数あり　戻り値なし 1
// returnの戻り値指定がないのでechoが処理される

 function getComment($string/*インプット引数*/){
     echo $string;//処理で使っている引数
 }

getComment('コメント');

echo('<pre>');

// 変数を用意しておくことが多い
// インプット引数と実行引数は同じにできない
// インプット引数と変数は違ってもOK
//変数を変更させれば関数を変更させる必要はない

$comment3 = '変数を用意3';


function getComment２($string){
    echo $string;
}
getComment２($comment3);

echo('<pre>');

// インプット引数なし
// アウトプット戻り値あり

function getNumberCount(){
    return 5;
}

$number = getNumberCount();

echo $number;

// 引数２つ
// 戻り値あり

function sumPrice($int1, $int2){
    $int3 = $int1 + $int2; //処理でも引数と同じ変数をしようすること
    return $int3;
}

$total = sumPrice(3,5);

?>