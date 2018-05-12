<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

</head>
<h2>Ordem encontrada</h2>
<hr>
<?php

$n1 = $_GET['N1'];
$n2 = $_GET['N2'];
$n3 = $_GET['N3'];

$maior = 0;
$menor = 0;
$meio = 0;
 
if($n1>=$n2 && $n1>=$n3)
{
$maior = $n1;
if($n2<=$n3)
{
$menor = $n2;
$meio = $n3;
} 
else 
{
$menor = $n3;
$meio = $n2;
}
}
 
if($n2>=$n1 && $n2>=$n3)
{
$maior = $n2;
if($n1<=$n3)
{
$menor = $n1;
$meio = $n3;
} 
else 
{
$menor = $n3;
$meio = $n1;
}
}
 
if($n3>=$n1 && $n3>=$n2)
{
$maior = $n3;
if($n2<=$n1)
{
$menor = $n2;
$meio = $n1;
} 
else 
{
$menor = $n1;
$meio = $n2;
}
}
 
echo $maior." ".$meio." ".$menor;

?>
</body>
 
</html>