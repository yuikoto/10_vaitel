<?php

// 関数ファイルを読み込む
require_once __DIR__ . '/common/functions.php';

// データベースに接続
$dbh = connect_db();

//index.phpのPOST
//echo $_POST['date'];
//echo $_POST['time'];
//echo $_POST['temperature'];
//echo $_POST['bp_up'];
//echo $_POST['bp_under'];
//echo $_POST['pulse'];
//echo $_POST['vaitel_comment'];

?>








<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://unpkg.com/ress@3.0.0/dist/ress.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&family=Zen+Maru+Gothic:wght@300;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" />
    <link rel="stylesheet" href="css/style.css" />

    <title>今日の体調を記録しましょう！</title>
</head>




<body>
    <header>
        <h1>今日の体調を記録しましょう！</h1>
    </header>

    <div class="wrapper">
        <form method="post" action="calendar.php">
            <!--カレンダー画面に飛ぶようにしている-->
            <div class="vaitel">
                <label>日付 ：
                    <input type="text" name="date">
                </label>
                <br>
                <label>時間 ：
                    <input type="text" name="time">
                </label>
                <br>
                <label>体温 ：
                    <input type="text" name="temperature">
                </label>
                <br>
                <label>血圧 (上) ：
                    <input type="text" name="bp_up">
                </label>
                <br>
                <label>血圧 (下) ：
                    <input type="text" name="bp_under">
                </label>
                <br>
                <label>脈拍 ：
                    <input type="text" name="pulse">
                </label>
                <br>
                <textarea name="vaitel_comment" placeholder="コメント" rows="10" cols="60"></textarea>
                <br>
                <div class="btn">
                    <input type="reset" value="キャンセル"></label>
                    <input type="submit" value="保存"></input>
                </div>
            </div>
            <!--ここまでvaitel-->
        </form>
        <!--ここまでform-->
    </div>
    <!--ここまでwrapper-->


    <footer>
        <p>&copy;2022</p>
    </footer>
</body>

</html>
