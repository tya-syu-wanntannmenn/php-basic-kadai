<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_011</title>
</head>

<body>
    <p>
        <?php
        $variable_name = ['name' => '玉ねぎ', 'price' => 200, 'place' => '北海道'];
        
        // 連想配列$variable_nameのキーと値をコロン(:)で区切り、要素ごとに改行して出力する
        foreach ($variable_name as $key => $value) {
            echo "{$key}: {$value}<br>";
        }
        ?>
    </p>
</body>

</html>