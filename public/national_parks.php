<!DOCTYPE html>
<head>
<title>National Park Directory</title>
<?php

require '../dbconnection.php';

 $offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;

 $stmt = $dbc->prepare("SELECT * FROM national_parks LIMIT 4 OFFSET :offset");
 $stmt->bindValue(':offset',$offset , PDO::PARAM_INT);
 $stmt->execute();
 
 $parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

 $count = (int) $dbc->query('SELECT count(*) FROM national_parks')->fetchColumn();

?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</head>
<body>
<h1>National Park Directory</h1>

<div class = "container">
 <?php foreach ($parks as $parkInfo) :?>
    <?= '<br><strong>National Park Name:</strong>' . " ". $parkInfo['name']. '<br>';?>
    <?=  '<strong>Location:</strong>' . " ". $parkInfo['location']. '<br>';?>
    <?=  '<strong>Date Established:</strong>' . " ". $parkInfo['date_established']. '<br>';?>
    <?=  '<strong>Acres:</strong>' . " ". $parkInfo['area_in_acres']. '<br>';?>
    <?=  '<strong>Description:</strong>' . " ". $parkInfo['description']. '<br><br>';?>

 <?endforeach;?>


 <?php if($offset != 0):?>
     <a href='?offset=<?=($offset-4);?>'>PREV</a>
     <?endif;?>


<?php if (($offset=+4)<$count):?>
     <a href='?offset=<?=($offset+4);?>'>NEXT</a>
     <?endif;?>

</div>

