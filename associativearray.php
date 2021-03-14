<?php
$array_member =[
    'name' =>'本田',
    'height' => 170,
    'hobby' => 'テニス'
];

// 連想配列の場合は数字ではなくkeyで指定するので文字列になる
echo $array_member['name'];

echo('<pre>');
var_dump($array_member);
echo('<pre>');


$nohara_fam=[
    '虎徹'=>[
        '身長' =>70,
        '体重' =>15
    ],
    '小銀' =>[
        '身長' =>45,
        '体重' =>5

    ]
];

echo('<pre>');
var_dump($nohara_fam);
echo('<pre>');

echo '虎徹君の身長は'.$nohara_fam['虎徹']['身長'].'cmです';

?>