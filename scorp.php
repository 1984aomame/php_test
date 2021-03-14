<?php

$globalVariable ='グローバル変数です';

function checkScope(){
    $localVariable ='ローカル変数です';
    echo $localVariable;
    echo $globalVariable; //関数の中では使えない
    global $globalVariable; //先頭にglobalで使用可能
    echo $globalVariable; //ほぼ使わない


}

// echo $globalVariable;
echo $localVariable; //表示されない　関数の中の変数は関数の中だけで使われる
echo('<pre>');
checkScope();

// ↑を書き換える

function checkScopetest($str){
    echo $str;
}

checkScopetest($globalVariable);

?>