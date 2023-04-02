<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Job Board - Home</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		nav {
			background-color: #333;
			color: #fff;
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 1rem;
		}

		nav a {
			color: #fff;
			text-decoration: none;
			padding: 0.5rem;
		}

		nav a:hover {
			background-color: #fff;
			color: #333;
		}

		.search-container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			padding: 1rem;
			background-color: #f2f2f2;
		}

		.search-container label {
			display: block;
			margin-bottom: 0.5rem;
		}

		.search-container input[type="text"],
		.search-container select {
			padding: 0.5rem;
			margin-right: 0.5rem;
			border: none;
			border-radius: 0.25rem;
			background-color: #fff;
		}

		.search-container button {
			padding: 0.5rem 1rem;
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 0.25rem;
			cursor: pointer;
		}

		.job-list {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			padding: 1rem;
		}

		.job {
			background-color: #fff;
			border: 1px solid #ccc;
			border-radius: 0.25rem;
			box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
			padding: 1rem;
			margin: 1rem;
			width: 300px;
			height: 200px;
			overflow: hidden;
		}

		.job h2 {
			font-size: 1.25rem;
			margin-bottom: 0.5rem;
		}

		.job p {
			margin-bottom: 0.5rem;
		}

		.job a {
			display: inline-block;
			padding: 0.5rem 1rem;
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 0.25rem;
			text-decoration: none;
			margin-top: 0.5rem;
		}

		.job a:hover {
			background-color: #fff;
			color: #333;
		}

	</style>
</head>
<body>
	@include("navbars.navBar")

	<!-- Search area -->
	<div class="container mt-3">
		<div class="row">
			<div class="col-md-4">
				<form>
					<div class="form-group">
						<label for="searchType">Search by:</label>
						<select class="form-control" id="searchType">
							<option>Industry</option>
							<option>Name</option>
							<option>Company</option>
						</select>
					</div>
					<div class="form-group">
						<label for="searchText">Search text:</label>
						<input type="text" class="form-control" id="searchText">
					</div>
					<button type="submit" class="btn btn-primary">Search</button>
				</form>
			</div>
		</div>

		<!-- Jobs list -->
		<div class="row mt-3">
			<div class="col-md-8">
				<h4>Job Posts</h4>
				<ul class="list-group">
					<li class="list-group-item">
						<h5>Job title 1</h5>
						<p>Company name, Location</p>
						<p>Description of the job</p>
					</li>
					<li class="list-group-item">
						<h5>Job title 2</h5>
						<p>Company name, Location</p>
						<p>Description of the job</p>
					</li>
					<li class="list-group-item">
						<h5>Job title 3</h5>
						<p>Company name, Location</p>
						<p>Description of the job</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
