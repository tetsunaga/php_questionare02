<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>C's ∀cademy TOKIO に新規御入学者様へのアンケート</title>
</head>
<body>
    <h1>C's ∀cademy TOKIO に新規御入学者様へのアンケート</h1>
    <table border="2" style="border-collapse: collapse; border-color: blue">
    <tr>
      <th>入力日時</th>
      <th>名前</th>
      <th>メールアドレス</th>
      <th>好きなプログラミング言語</th>
    </tr>
    <?php
    // ファイルを開く
    $openFile = fopen('./data/data.txt', 'r');
    // ファイル内容を1行ずつ読み込んで出力
    // 一行ずつ読み込んで$strに入れる
    while ($str = fgets($openFile)) { ?>
        <tr>
        <?php 
        //explode関数で文字を分割
        $result = explode(',',$str);
        //for文で表示をループ処理
        for ($i = 0; $i < count($result); $i++) { ?>
            <td>
            <?php
            echo $result[$i];
            ?>
            </td>
            <?php
        }; ?>
        <tr>
        <?php
    }; ?>
    <?php
    // ファイルを閉じる
    fclose($openFile);
    ?>
  </table>
</body>
</html>