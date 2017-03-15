<?php
 include '../data/dbcon.php';
?>
<?php
    
    $name=  filter_input(INPUT_POST, 'name');
    $contact=  filter_input(INPUT_POST, 'contact');
    $bgroup=  filter_input(INPUT_POST, 'bgroup');
    $bunit=  filter_input(INPUT_POST, 'bunit');
    $location=  filter_input(INPUT_POST, 'location');
    $query="INSERT INTO `request`(`name`, `contact`, `bgroup`, `amount`, `location`) VALUES ('$name','$contact','$bgroup','$bunit','$location')";
    $result_report=mysqli_query(get_db_connection(), $query);
header('LOCATION:../view/index.php');


?>