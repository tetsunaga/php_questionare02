<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C's ∀cademy TOKIO 新規御入学者様へのアンケート</title>
</head>
<body> <pre>
    <h1>C's ∀cademy TOKIO に新規御入学者様へのアンケート</h1></pre>
    あなたの好きなプログラミング言語を選んで投票してください。
<!-- <form name="form" metohd="post" action="quest.php"> -->
<form action="write02.php" method="post">
    name :<input type = "text" name = "name"><br>
    email :<input type = "text" name = "email"><br>

<!-- ラジオボタンを項目ごとに出力 -->
<!-- $subject=array('javascript','PHP','python','C言語','SQL'); -->
<pre style="font-size:bold;">
<pre>
<input type= "radio" name="lang" value="javascript" id= "sample1"><label for = "sample1">javascript</label>
</pre>
<pre>
<input type= "radio" name="lang" value="php" id= "sample2"><label for = "sample2">php</label>
</pre>
<pre>
<input type= "radio" name="lang" value="python" id= "sample3"><label for = "sample3">python</label>
</pre>
<pre>
<input type= "radio" name="lang" value="C言語" id= "sample4"><label for = "sample4">C言語</label>
</pre>
<pre>
<input type= "radio" name="lang" value="SQL" id= "sample5"><label for = "sample5">SQL</label>
</pre>
<!-- for文で言語の配列に数値がでるようにする -->
<!-- // for($i=0; $i<count($subject); $i++){ -->
<!-- //ラジオボタンでfor文で生成されたデータを表示    -->
<!-- // echo " -->
<input type='submit'  value='送信'>
</form>
<!-- // var_dump(id); -->

<!-- var_dump(imput type); -->
<!-- <br>
<input type="submit" value="投票">
</form> -->

<!-- <br>
// <input type="submit" name="submit" value="投票">
// </form>
// <table border="1">



    
</body>
</html>