<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Practice</h2>
    <pre>
        <?php
        try {
            // mydbはデータベース名
            //host=127.0.0.1は
            //charset=utf8
            $db = new PDO('mysql:dbname=mydb;host=127.0.0.1;charset=utf8', 'root', '');
                        //PDOExceptionクラスはPDO(DB接続に関するエラーがまとまっているクラス
                } catch (PDOException $e) {
            // $eはエラー文を入れる変数、getMessage()は
            //->は「～の中の」,$eの中の
            echo 'DB接続エラー： ' . $e->getMessage();
        }
        // P202 
        // $countの中に入るのは数字,今回だと1
        $count = $db->exec('INSERT INTO new_items SET maker_id=1, item_name="メロン", price=210, keyword="缶詰,ピンク,甘い", sales=0, created="2018-01-23", modified="2018-01-23"');
        echo $count . '件のデータを挿入しました';
        
        // P204 商品一覧取得
                    // 実行
        $records = $db->query('SELECT * FROM new_items');
        //              SQL文の実行結果(new_itemsテーブルのすべて) ,fetch() 繰り返しレコードの取得
        while ($record = $records->fetch()) {
        print($record['item_name'] . "\n");
        print($record['price'] . "円". "\n");
        print($record['keyword'] . "\n");
        print($record['maker_id'] . "\n");
        }
        ?>
    </pre>
</body>
</html>