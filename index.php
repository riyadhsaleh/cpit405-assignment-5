<!DOCTYPE html>
<html lang="en">
    
    
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>My Images</title>
</head>


  <body>
    <?php 
    require_once('./db_connection.php');
$sql = "SELECT * FROM ass_5;";
$response = $GLOBALS['conn']->query($sql);
while ($row = $response->fetch_array()){
echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['pic'] ).'"/>';
}
?>

  </body>
</html>