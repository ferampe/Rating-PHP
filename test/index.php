<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Test</title>
    <link rel="stylesheet"  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   
<body>

<?php
require_once '../vendor/autoload.php';

$voto = new \Ferampe\Vote();
$json = '{"stars" : [{"1":0, "2":1, "3":0, "4":0, "5":1}], "average" : 0 }';
//$nuevoJson = $voto->calcVote($json, 5);
//var_dump($nuevoJson);
	echo "<br>";
echo $voto->getStarHtml(1);
?>



</body>
</html>



