<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			font-size: 16px;
		}

		h1 {
			text-align: center;
			margin-top: 50px;
			color: #333;
		}

		form {
			margin: 0 auto;
			max-width: 400px;
			padding: 20px;
			border: 1px solid #ccc;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}

		label {
			display: block;
			margin-bottom: 10px;
			color: #333;
		}

		input[type="text"],
		input[type="email"],
		input[type="number"],
		input[type="password"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			font-size: 16px;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
		}

		input[type="submit"]:hover {
			background-color: #45a049;
		}

		.error {
			color: red;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<h1>Job to Post</h1>
	@if(is_null($job))
	<form action="{{route('createJob')}}" method="POST">
	@else
	<form action="/addJob/edit/{{$job->id}}" method="POST">
	@endif
		@csrf
		<label for="title"> Title:</label>
		<input type="text" id="title" name="title" value="{{is_null($job)? null:$job->title}}" required>
		<label for="description">Description:</label>
		<textarea id="description" name="description"  rows="5" cols="50"  required>{{ is_null($job)? null:$job->description }}</textarea>
		<label for="location">Location:</label>
		<input type="text" id="location" name="location" value="{{is_null($job)? null:$job->location}}" required>
		<label for="salary">Salary:</label>
		<input type="number" id="salary" name="salary" value="{{is_null($job)? null:$job->salary}}" required>
		<label for="applied">Appplied:</label>
		<input type="number" id="applied" name="applied"  value="{{is_null($job)? 0:$job->applied}}" required>
		<label for="vacant">Vacant:</label>
		<input type="number" id="vacant" name="vacant" value="{{is_null($job)? 0:$job->vacant}}" required>
		<label for="category">Category:</label>
		<input type="text" id="category" name="category" value="{{is_null($job)? null:$job->category}}" required>

        <br>
        <input type="submit" value="Done" >
    <div>
	</form>
</body>
</html>
