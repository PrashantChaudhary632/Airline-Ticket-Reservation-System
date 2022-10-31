
<?php
  session_start();
  unset($_SESSION['usrid']);
  unset($_SESSION['logged']);
  session_destroy();
?>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectlogin";
$msg="";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  echo "Database connection failed".mysqli_connect_error();
} 
else{
  if(isset($_POST['search'])){
    $TNumber=$_POST['TicketNumber'];

$sql="Select * from passengerdetails where TicketNumber = '".$TNumber."'";
$result = $conn->query($sql);

if($result-> num_rows > 0){

  while($row = $result->fetch_assoc()){
    $TicketNumber = $row['TicketNumber']; 
    $PassengerName= $row['PassengerName'];
    $Airline= $row['Airline'];
    $FlightNumber = $row['FlightNumber'];
    $Source = $row['Source'];
    $Destination = $row['Destination'];
    $Date = $row['Date'];
    $Time = $row['Time'];
    $TotalBookedSeat = $row['TotalBookedSeat'];
    $Age = $row['Age'];
    $Gender= $row['Gender'];
    $Contact = $row['Contact'];

    
  }
  session_start();
  $_SESSION['TicketNumber']=$TicketNumber;
    $_SESSION['PassengerName']=$PassengerName;
    $_SESSION['Airline']=$Airline;
    $_SESSION['FlightNumber']=$FlightNumber;
    $_SESSION['Source']=$Source ;
    $_SESSION['Destination']=$Destination ;
    $_SESSION['Date']=$Date ;
    $_SESSION['Time']=$Time;
    $_SESSION['TotalBookedSeat']=$TotalBookedSeat;
    $_SESSION['Age']=$Age;
    $_SESSION['Gender']=$Gender;
    $_SESSION['Contact']=$Contact;

     header("Location:./EnquiryTicketDisplay.php");
  }
  else{
   $msg ="Sorry!! No Tickets Found";
  }
}
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Enquiry About Tickets</title>
  <link rel="stylesheet" type="text/css" href="Enquiry.css">

</head>
<body>
  <nav>
        <a href="home.php">About us</a>
        <a href="contact.php">Contact us</a>
        <a href="LoginHtml.php">Admin login</a>
      <a href="TicketBook.php">Book a ticket</a>
      <a href="Enquiry.php" style="background-color:#0aa2c3;">Enquiry about your ticket</a>
    </nav>

    <div id="form_login">
 <form method="post" action="#">
 <div id="heading">
  <label>Enter the ticket number:</label>
  </div>
  <input type="text" name="TicketNumber" placeholder="Please enter ticket number"  id="name" required><br>

 <input type="submit" name="search" value="Search" id="search">
 </form>
 <div id="errormsg">
   <?php
   echo $msg;
   ?>
 </div>
</div>

</body>
</html>