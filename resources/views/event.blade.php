<html>
	<head>
		<title>Spencer Teh</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
		<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
		<meta name="viewport" content="width-device-width, initial-scale=1.0">
	</head>
<body>
	<div class="bg-wrap">
		<section class="container-fluid" id="head-btn">
			<div class="container">
				<div class="text-center">
					<b>Test Organizer</b> <span style="font-weight:400;">Presents</span></h4>
				</div>		
			</div>		
		</section>
		<section class="container">
			<section class="container">
				<div class="row">
					<div class="text-center">
					    <h1 style="font-size: 60px;">Sample Event w/ Special Guest</h1>
					    <p>Tue 21 Nov 18:33PM - Sun 21 Nov 18.33 PM @ <strong>Dublin Airport</strong></p>						
					</div>
				</div>
				<div class="link-container">
					<div class="col-md-4 col-sm-4">
						<a href="#" class="btn btn-lg" id="links">tickets</a>
					</div>
					<div class="col-md-4 col-sm-4">
						<a href="#" class="btn btn-lg" id="links">details</a>
					</div>
					<div class="col-md-4 col-sm-4">
						<a href="#" class="btn btn-lg" id="links">location</a>
					</div>					
				</div>
			</section>
			<section class="container" style="padding-top: 40px" id="ticket-container">
				<div class="row">
					<div class="well">
							<h1>Tickets</h1>	
							<div class="row">
								<div class="col-md-4">
									<p><strong>Free Ticket</strong></p>
									<p>Sample Description</p>
								</div>
								<div class="col-md-8">
									<div class="row pull-right">
										<div class="col-md-4" style="margin-top: 7px;">
											<p>Free</p>
										</div>
										<div class="col-md-8">
											<form>
												<select class="form-control">
													<option>0</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
												</select>
											</form>																							
										</div>
									</div>
								</div>
									<div class="col-md-12" style="margin-top: -10px;">
										<hr>
									</div>					
								</div>
							<div class="row">
								<div class="col-md-4">
									<p><strong>General Ticket</strong></p>
									<p>Sample Description</p>
								</div>
								<div class="col-md-8">
									<div class="row pull-right">
										<div class="col-md-4" style="margin-top: 7px;">
											<p>€10.00</p>
										</div>
										<div class="col-md-8" id="select-input">
											<form>
												<select class="form-control" style="margin-right: -15px;">
													<option>0</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
												</select>																				
											</form>
										</div>
									</div>
								</div>
									<div class="col-md-12" style="margin-top: -10px;">
										<hr>
									</div>							
								</div>
								<div class="row">
									<div class="col-md-4">
										<img src="http://attendize.website/assets/images/public/EventPage/credit-card-logos.png">
										<p style="font-size: 11px;">Offline Payment Methods Available</p>
									</div>
									<div class="col-md-8">
										<div class="row pull-right">
											<div class="col-md-9">
												<input type="submit" value="register" class="btn btn-lg btn-default" id="register-btn">	
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
				</section>
			</section>		
		</div>
</body>
</html>