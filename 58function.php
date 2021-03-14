<?php

function defaultValue($string=null)//nullを設定します　②
{
    echo $string.'です';
}

defaultValue();//デフォルト値がインプット引数で設定されない場合エラーになるので①
echo ('<pre>');
defaultValue('僚香');