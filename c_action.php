<?php
$a = $_POST['n1'];
$b = $_POST['n2'];
$op = $_POST['OP'];
$result = $_POST['o1'];

switch ($op) {
  case 'add':
    $result=$a+$b;
    break;
  case 'sub':
    $result=$a-$b;
    break;
  case 'div':
    $result=$a/$b;
    break;
  case 'mul':
    $result=$a*$b;
    break;
  default:
    echo 'internal error';
    break;
}

header("location:index.php?sigma=$result&a1=$a&a2=$b&op=$op");
?>
