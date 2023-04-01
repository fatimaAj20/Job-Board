<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
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

		input[type="email"],
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

		a {
			color: #333;

		}
        p {
            text-align: center;

        }
	</style>
</head>
<body>
	<h1>Login Page</h1>
	<form action="{{ route('authentication') }}" method="POST">
		@csrf
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required value=''>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required value=''>
		<input type="submit" value="Login">
	</form>
    @if ($errors->any())
		<div class="error">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<p>Don't have an account? <a href= {{ route('regester') }} > Create one</a></p>
</body>
</html>
