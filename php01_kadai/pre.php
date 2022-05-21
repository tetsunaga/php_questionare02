<?php
    
    // 日付表示
    // ※　アルファベット大文字小文字を間違えないでください。
    $today = date('Y/m/d H:i');
    $today2 = date('Y年m月d日 H時');

    echo $today;
    echo '<br>';
    echo $today2;
    echo '<br>';

    // 文字長さ
    $string = 'abcde';
    $length = strlen($string);
    echo $string . 'の文字数は' . $length . '文字';
    echo "<br>";
    // 正確には、strlen() が返すのはバイト数であり、 文字数ではありません。
    // 日本語文字数の場合は、https://www.flatflag.nir87.com/strlen-671

    // trim
    // ※trim...全角スペースは取り除かない。取り除くものは↓
    // https://www.php.net/manual/ja/function.trim.php
    // 全角対応は、str_replaceを利用する。
    $string2 = ' 前後にわざと空白を入れる ';
    echo $string2;
    echo '<br>';
    echo trim($string2);

    // ランダムな数字を表示する(rand)
    // 第1引数は最小の数、第2は最大の数
    $rand = rand(1, 10);
    echo '<pre>';
    var_dump($rand);
    echo '</pre>';

    // おみくじ
    echo '<br>';
    if ($rand === 1) {
        echo '大吉';
    } else {
        echo '大凶';
    }
    ?>