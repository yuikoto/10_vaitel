<?php

require_once __DIR__ . '/functions.php';

// データベースに接続
$dbh = connect_db();

// SQL文の組み立て
$sql = <<<EOM
INSERT INTO
    10_vaitel
VALUES
    *
EOM;

// プリペアドステートメントの準備
$stmt = $dbh->prepare($sql);

// バインド(代入)するパラメータの準備
$id = '1';
$vaitel_date = '1';
$vaitel_time = '1';
$temperature = '1';
$bp_up = '1';
$bp_under = '1';
$pluse = '1';
$vaitel_comment = 'a';


// パラメータのバインド(プレースホルダへの代入)
// 文字列の場合: PDO::PARAM_STR
// 数値の場合: PDO::PARAM_INT
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$stmt->bindValue(':vaitel_date', $vaitel_date, PDO::PARAM_STR);
$stmt->bindValue(':vaitel_time', $vaitel_time, PDO::PARAM_STR);
$stmt->bindValue(':temperature', $temperature, PDO::PARAM_STR);
$stmt->bindValue(':bp_up', $bp_up, PDO::PARAM_STR);
$stmt->bindValue(':bp_under', $bp_under, PDO::PARAM_STR);
$stmt->bindValue(':pluse', $pluse, PDO::PARAM_STR);
$stmt->bindValue(':vaitel_comment', $vaitel_comment, PDO::PARAM_STR);



// プリペアドステートメントの実行
$stmt->execute();

// SQL文の組み立て
$sql2 = 'SELECT * FROM 10_vaitel';

// プリペアドステートメントの準備
$stmt = $dbh->prepare($sql2);

// プリペアドステートメントの実行
$stmt->execute();

// 結果の受け取り
$members = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO - INSERT</title>
</head>

<body>
    <h2>データの登録成功</h2>
    <ul>
        <?php foreach ($vaitel as $id) : ?>
            <li><?= h($vaitel['id'])  ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
