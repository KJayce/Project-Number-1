<?php 

$sujet=$_GET['sujet'];
$verbe=$_GET['verbe'];
$complement=$_GET['complement'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
<form method="GET">
    
    <input type="password" name="sujet" value="">
    <input type="password" name="verbe" value="">
    <input type="password" name="complement" value="">
    <input type="submit">

</form>

<?php echo $sujet; echo ' ' ; echo $verbe; echo ' ' ;   echo $complement?>
    
</body>
</html>