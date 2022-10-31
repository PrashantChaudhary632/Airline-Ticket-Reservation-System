<?php
session_start();
$TicketNumber=$_SESSION['TicketNumber'];
    $PassengerName=$_SESSION['PassengerName'];
    $Airline=$_SESSION['Airline'];
   $FlightNumber=$_SESSION['FlightNumber'];
    $Source= $_SESSION['Source'];
    $Destination= $_SESSION['Destination'];
    $Date =$_SESSION['Date'];
    $Time=$_SESSION['Time'];
    $TotalBookedSeat=$_SESSION['TotalBookedSeat'];
    $Age=$_SESSION['Age'];
   $Gender= $_SESSION['Gender'];
    $Contact=$_SESSION['Contact'];
    
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ticket Display</title>
	<link rel="stylesheet" type="text/css" href="TicketDisplay.css">
</head>
<body>

<div class="center">
	<div class="head">
	<h4>Ticket</h4>
	<div class="SourceAndDestination">
		<span class="s1"><?php echo $Source; ?></span>
		<p><span class="s2"><?php echo" To ";?></span>
		<span class="s3"><?php echo $Destination; ?></span></p>
	</div>
	<div class="Airline">
		<?php echo $Airline; echo " Airlines"; ?>
	</div>
	</div>
	<div class="FlightDetails">
		<div class="TicketNo">
			<label>Ticket Number:</label>
			<input type="text" name="" value="<?php echo $TicketNumber; ?>" readonly>
		</div>
		<div class="FlightnoSeats">
			<div class="Flightno">
				<label>Flight No:</label>
				<input type="text" name="" value="<?php echo $FlightNumber; ?>" readonly>
			</div>
			<div class="Seats">
				<label>Total Seats:</label>
				<input type="number" name="" value="<?php echo $TotalBookedSeat; ?>" readonly>
			</div>
		</div>
		<div class="date">
			<label>Date:</label>
			<input type="date" name="" value="<?php echo $Date; ?>" readonly>
		</div>
		<div class="time">
			<label>Time:</label>
			<input type="text" name="" value="<?php echo $Time; ?>" readonly>
		</div>
		<div class="passengername">
			<label>Name:</label>
			<input type="text" name="" value="<?php echo $PassengerName; ?>" readonly>
		</div>
		<div class="contact">
			<label>Contact:</label>
			<input type="text" name="" value="<?php echo $Contact; ?>" readonly>
		</div>
		<div class="Gender">
			<label>Gender:</label>
			<input type="text" name="" value="<?php echo $Age; ?>" readonly>
		</div>
		<div class="Age">
			<label>Age:</label>
			<input type="text" name="" value="<?php echo $Gender; ?>" readonly>
		</div>
		<div class="btn">
			<input type="submit" name="" value="Back" onclick="EnquiryDone()" class="btn1">
			<script type="text/javascript">
				function EnquiryDone(){
					location.href="./Enquiry.php"
				}
			</script>
		</div>
	</div>
</div>
</body>
</html>
