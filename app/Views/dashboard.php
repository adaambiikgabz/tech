
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		
		.header {
			background-color: #007bff;
			padding: 20px;
		}
		
		h1 {
			color: #fff;
			text-align: center;
			margin: 0;
		}
		
		.footer {
			background-color: #555;
			padding: 10px 0;
			color: #fff;
			text-align: center;
			position: fixed;
			bottom: 0;
			width: 100%;
		}
		
		.link-container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			margin-top: 30px;
			column-count: 3; /* Set number of columns here */
			column-gap: 20px; /* Set gap between columns here */
		}
		
		.link-container a {
			background-color: #007bff;
			border: none;
			color: white;
			padding: 10px 20px;
			text-align: center;
			text-decoration: none;
			display: block;
			font-size: 16px;
			margin: 10px;
			cursor: pointer;
			border-radius: 5px;
			transition: all 0.2s ease-in-out;
		}
		
		.link-container a:hover {
			background-color: #0069d9;
			transform: translateY(-3px);
			box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
		}
	</style>
</head>


<body>
	<div class="header">
		<h1>Welcome to the Dashboard!</h1>
	</div>
	
	<div class="container">
		<p>Click on the links below to go to any of the pages:</p>
		<div class="link-container">
			
			<a href="/cropvarieties">Crop Varieties</a>
			<a href="/processedfoods">Processed Foods</a>
			<a href="/othertechnologies">Other Technologies</a>
			<a href="/agroinput">Agro Inputs</a>
			<a href="/marketabletechnologies">List of Marketable Products</a>
		</div>
	</div>
	

	<div class="footer">
		<p>Copyright © 2023 Dashboard.
	</div>

	<!-- Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> 