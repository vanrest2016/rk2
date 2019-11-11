
<html>
<head>
</head>
<body>
<p>Яковлев Иван ИУ4-13Б вариант 11</p>
<p>Task 1</p>
<table border = "1">
<?php
for($i = 1; $i <= 10; $i++){
echo'<tr>';
for($j = 1; $j <= 10; $j++)
{ 
$num=$j*$i;
echo '<td>';
if($i==0 || $j==0) echo $i,$j;
else echo $num;}
}
?>
</table>
</body>
</html>
