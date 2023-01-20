<!doctype html>
<html lang="sv">
<style>
table{
 float:left;
 display: inline-block;
 margin-left:40px;
} 
    


</style>



<head>
    <meta charset="UTF-8">
    
    <title>Multiplication Tabell php</title>
</head>
<body>




<?php
 
$x = 1; 
echo "<table border = '1'>";



 
while ( $x <= 10 ) {
    echo "<tr>";
 
    $y = 5;
    while ( $y <= 5 ) {
        echo "<td >$x * $y = </td> <td> " . $x * $y ."</td>  ";
        $y++;
    }
 
    echo "</tr>";
    $x++;
}
 
echo "</table>";
echo ""
 
?>
<table class="center">
<style float="left"></style>
<?php
 
$x = 1; 
echo "<table border = '1'>";


 

while ( $x <= 10 ) {
    echo "<tr>";
 
    
    $y = 10;
    while ( $y <= 10 ) {
        echo "<td >$x * $y = </td> <td> " . $x * $y ."</td>  ";
        $y++;
    }
 
    echo "</tr>";
    $x++;
}
 
echo "</table>";
 
?>

<?php
 
$x = 1; 
echo "<table border = '1'>";


 

while ( $x <= 10 ) {
    echo "<tr>";
 
    
    $y = 15;
    while ( $y <= 15 ) {
        echo "<td >$x * $y = </td> <td> " . $x * $y ."</td>  ";
        $y++;
    }
 
    echo "</tr>";
    $x++;
}
 
echo "</table>";
 
?>