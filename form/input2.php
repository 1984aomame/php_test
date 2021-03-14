<?php
if($pageflag === 0 ):?>
入力画面
<?php  endif;?>
<?php if($pageflag === 1 ):?>
確認画面
<?php  endif;?>
<?php if($pageflag === 2 ):?>
完了画面
<?php  endif;?>





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
<input type="email" name="email"><!--inputは閉じタグいらない-->

<input type="submit" name="btn_confirm" value="確認する"><!--valueでボタンの中身決定可能-->

</form>
</body>
</html>