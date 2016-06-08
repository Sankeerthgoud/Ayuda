<?php
session_start();
if(!isset($_SESSION['username'])){
header("location:login.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ayuda</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  </head>
<h3> Messages received are </h3>
  <body>
  <div class="center">
	<table name="tablee" width="100%" border="1" style="table-layout:fixed" >
  <tr>
    <td style="text-align:center">Time Stamp</td>
    <td style="text-align:center">Name</td>
	  <td style="text-align:center">Message</td>
	  <td style="text-align:center">Email</td>
  </tr>
<?php
$conn = new mysqli("localhost","root","","ayuda");
$query = "SELECT * FROM contact";
$retval=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($retval))
{
  echo "<tr>";
        echo "<td>" . "$row[0]" . "</td>";
        echo "<td>" . "$row[1]" . "</td>";
        echo "<td>" . "$row[2]" . "</td>";
        echo "<td>" . "$row[3]" . "</td>";
  echo "</tr>";
}
?>
 </table>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">AYUDA</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li ><a href="Messages.php">Messages</a></li>
            <li><a href="Donations.php">Donations</a></li>
            <li><a href="Volunteers.php">Volunteers</a></li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
  <?php $conn->close(); ?>
</html>
