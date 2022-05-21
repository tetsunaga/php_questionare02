<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
//データの出力
<?php
echo "<hr>";
for($i=0; $i<count($subject); $i++){
	echo "<tr>";
	echo "<td>{$subject[$i]}</td>";
	echo "<td><table><tr>";
	$wd=$data[$i]*10; //出力幅の設定
	echo "<td width='$wd' bgcolor='#eeeeee'> </td>";
	echo "<td>{$data[$i]} 票</td>";
	echo "</tr></table></td>";
	echo "</tr>\n";
}
?>

    
</body>
</html>