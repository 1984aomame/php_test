<?php
if(!empty($_GET['your_name']))
{
    echo $_GET['your_name'];
    echo('<pre>');
    var_dump($_GET);
    echo('<pre>');

}else{
    echo '値が入力されていません';
}

//$_で始まる変数をスーパーグローバル変数という　phpには９種類ある
//連想配列になっている　nameの箇所がkey, 入力された値がvalueになる


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="GET" action="input.php">
<input type="text" name="your_name"><!--inputは閉じタグいらない-->
<br>
<input type="checkbox" name="cats[]" value="虎徹">虎徹
<input type="checkbox" name="cats[]" value="銀">銀
<input type="checkbox" name="cats[]" value="宮古">宮古<!--[]で複数作成可能-->

<input type="submit" value="送信"><!--valueでボタンの中身決定可能-->

</form>
</body>
</html>