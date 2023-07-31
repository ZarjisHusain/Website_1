<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Book Bus Ticket</title>

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">


	<link type="text/css" rel="stylesheet" href="css1/bootstrap.min.css" />

	
	<link type="text/css" rel="stylesheet" href="css1/style.css" />

	

</head>

<body>
<?php
require_once("DBconnect.php");

?>	
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Book a Ticket</h1>
							

						</div>
						
						
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
									<form action = "addtruck.php" class = "form_design" method = "post">
										<span class="form-label">Name</span>
										<input class="form-control" type="text" name = "sname">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="text" name = "smail">
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control" type="text" name = "sphone">
							</div>
							<div class="form-group">
								<span class="form-label">Location</span>
								<input class="form-control" type="text" name = "slocation">
							</div>
							<div class="form-group">
								<span class="form-label">Destination</span>
								<input class="form-control" type="text" name = "sdestination">
							</div>
							
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Date</span>
										<input class="form-control" type="date" name = "sdate">
									</div>
								</div>
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Hour</span>
												<select class="form-control">
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>10</option>
													<option>11</option>
													<option>12</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Min</span>
												<select class="form-control">
													<option>05</option>
													<option>10</option>
													<option>15</option>
													<option>20</option>
													<option>25</option>
													<option>30</option>
													<option>35</option>
													<option>40</option>
													<option>45</option>
													<option>50</option>
													<option>55</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">AM/PM</span>
												<select class="form-control">
													<option>AM</option>
													<option>PM</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
								</div>
								
								</div>
							</div>
							<br>
							   <div class="form-btn">
									<button class="submit-btn"; style="display:block; margin: 0 auto;">Book Now</button>
								</div>
										
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>