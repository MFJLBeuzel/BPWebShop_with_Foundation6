<?php
  include 'connect.php';

  //selecting Image
$query = "SELECT * from dbo.PRODUCT,[AFBEELDING_KLEIN] WHERE id = ?";
$stmt = $conn->prepare( $query );
//bind the id of the image you want to select
$stmt->bindParam(1, $_GET['id']);
$stmt->execute();
//to verify if a record is found
$num = $stmt->rowCount();
if( $num ){
    //if found
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    //specify header with content type,
    //you can do header(“Content-type: image/jpg”); for jpg,
    //header(“Content-type: image/gif”); for gif, etc.
    header(“Content-type: image/jpg”);

    //display the image data
    print $row['data'];
    exit;
}
?>
