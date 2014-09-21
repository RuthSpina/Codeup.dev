
<?php

require '../dbconnection.php';

 $offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;

 $stmt = $dbc->prepare("SELECT * FROM national_parks LIMIT 4 OFFSET :offset");
 $stmt->bindValue(':offset',$offset , PDO::PARAM_INT);
 $stmt->execute();

 $parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

 $count = (int) $dbc->query('SELECT count(*) FROM national_parks')->fetchColumn();

if(!empty($_POST)){
  // var_dump($_POST);

   foreach($_POST as $key => $value) {
    $confirm = true;
    if (empty($value))
{
  echo "<p>please enter all fields</p>";
  $confirm=false;
}
$formdata = array();
$formdata[] = $_POST;

}

$query = 'INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES(:name, :location, :date_established, :area_in_acres, :description)';
$stmt = $dbc->prepare($query);

if($confirm){
   foreach ($formdata as $national_park){
        $stmt->bindValue(':name', $national_park['name'], PDO::PARAM_STR);
        $stmt->bindValue(':location', $national_park['location'], PDO::PARAM_STR);
        $stmt->bindValue(':date_established', $national_park['date_established'], PDO::PARAM_INT);
        $stmt->bindValue(':area_in_acres', $national_park['area_in_acres'], PDO::PARAM_INT);
        $stmt->bindValue(':description', $national_park['description'], PDO::PARAM_STR);
        }
        $stmt->execute();
   }

}

?>

<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<style>
.formGrp{
  margin-left:100px;
  width:600px;
}
</style>
  </head>
  <body>
    <div class="formGrp">
    <h1>National Park Directory:</h1>
    <table class="table table-striped">
  <tr>
    <th>Name</th>
    <th>Location</th>
    <th>Date</th>
    <th>Acres</th>
    <th>Description</th>
  </tr>

  <?php foreach ($parks as $parkInfo) :?>
  <tr>
      <?= '<td>' . $parkInfo['name'] . '</td>' ;?>
      <?=  '<td>'. $parkInfo['location']. '</td>';?>
      <?=  '<td>'. $parkInfo['date_established']. '</td>';?>
      <?=  '<td>'. $parkInfo['area_in_acres']. '</td>';?>
      <?=  '<td>'. $parkInfo['description']. '</td>';?>
  </tr>
   <?endforeach;?>

</table>
 <?php if($offset != 0):?>
     <a class="btn btn-default" href='?offset=<?=($offset-4);?>'>PREV</a>
     <?endif;?>


<?php if (($offset+4)<$count):?>
     <a class="btn btn-default pull-right" href='?offset=<?=($offset+4);?>'>NEXT</a>
     <?endif;?>
<br>
    <hr>

    <h1>Add a New Park:</h1>

<form method="POST" action="nat_park_form.php">
  <div><label for="name">National Park Name:</label>
    <input id="name" name="name" class="form-control" type="text" placeholder="Enter name">
  </div>
  <div><label for="location">Location:</label>
    <input id="location" class="form-control" name="location" type="text" placeholder="Enter location">
  </div>
  <div><label for="date_established">Date Established:</label>
    <input id="date_established" class="form-control" name="date_established" type:"date" placeholder="MM/DD/YYYY">
  </div>
   <div><label for="area_in_acres">Acres:</label>
    <input id="area_in_acres" class="form-control" type="text" name="area_in_acres" placeholder="Enter Acre">
  </div>
   <div><label for="description">Description:</label>
    <input id="description" class="form-control" type="text" name="description" placeholder="Enter Desc">
  </div><br>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div><br>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
