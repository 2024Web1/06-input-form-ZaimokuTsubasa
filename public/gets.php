<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETメソッドのデータ</title>
</head>

<body>
    <h4>0J03009 材木飛翔</h4>
    GETメソッドで送られてきた複数のデータを受け取る。<br>
        <?php
        echo "出席番号:" . $_GET['course'] . $_GET['class'] . $_GET['number'] . "、氏名:" . $_GET['name'];
              
    // 下記2行を追加
        echo '</br>';
        var_dump($_GET);
        
        ?>
</body>

</html>