<!doctype html>

<html lang="en">
<?php
require_once 'head.php';
?>

<body>
  <script src="js/scripts.js"></script>
    <h1>Kingdom Death Monsters</h1>
   <dd> <h3>the nightmare horror board game</h3></dd>
<?php
require_once 'database.php';
$con=mysqli_connect($db_host, $db_username, $db_password,$db_name);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>
    <form action="survivor.php" method="get">
    Choisissez TON survivor (Tue le pas please)
<?php
$settlement_id = $_GET['id'];

$sql="SELECT * FROM survivors WHERE SETTLEMENT_ID = $settlement_id";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
    
    echo "<select name='id'>";
  while ($row=mysqli_fetch_row($result))
    {
    echo '<option value="'.$row[0].'">'.$row[1].'</option>';
   // printf ("%s (%s)\n",$row[0],$row[1]);
    }
      echo "</select>";
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);

 
    
    ?>
        <input type="submit" value="Submit">
         </form>
         
         <a href="#">Timeline</a><br>
          <a href="#">Principals/milestones</a><br>
           <a href="#">Ressources</a> 
</body>
<?php
require_once 'footer.php';
?>
</html>