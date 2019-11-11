
<html>
<head>
</head>
<body>
<p>Яковлев Иван ИУ4-13Б вариант 11</p>
<p>Task 1</p>
<table border = "1">
<?php
for($i = 0; $i <= 10; $i++){
echo'<tr>';
for($j = 0; $j <= 10; $j++)
{ 
$num=$j*$i;
echo '<td>';
if($i==0 || $j==0) echo $i,$j;
if(($num)%2==0);
elseif(($num)%3==0);
elseif(($num)%5==0);
else echo $num;
}
}
?>
</table>
</body>
</html>
