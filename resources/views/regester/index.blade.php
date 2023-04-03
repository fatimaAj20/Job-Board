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
	<h1>Register Page</h1>
	<form action="{{ route('regesterUser') }}" method="POST">
		@csrf
		<label for="first_name">First Name:</label>
		<input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
		<label for="last_name">Last Name:</label>
		<input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" value="{{ old('email') }}" required>
		<label for="phoneNumber">Phone Number:</label>
		<input type="number" id="phoneNumber" name="phoneNumber" value="{{ old('phoneNumber') }}" required>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
		<label for="password_confirmation">Confirm Password:</label>
		<input type="password" id="password_confirmation" name="password_confirmation" required>


        <div>
            <label for="role">{{ __('Register as') }}</label>

            <div>
                <select id="role" name="role">
                    <option value="3">{{ __('Job Seeker') }}</option>
                    <option value="2">{{ __('Company') }}</option>
                </select>
            </div>
        </div>
        <br>
        <input type="submit" value="Register">
    <div>
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
</body>
</html>
