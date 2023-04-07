<!DOCTYPE html>
<html>

<head>
    <title>Register Page</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>
	<h1>Register Page</h1>
    <div class="login-box">
	<form action="{{ route('Eregester') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<label for="companyName">Company Name:</label>
		<input type="text" id="companyName" name="companyName" value="{{ old('companyName') }}" required><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" value="{{ old('email') }}" required><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br>
		<label for="password_confirmation">Confirm Password:</label>
		<input type="password" id="password_confirmation" name="password_confirmation" required><br > <br>
        Documents related to comapany authentication:
        <br>
        <div style="border: 1px solid black; padding:10px">
        <label for="certificate">lebanon Creftificate Of Incorporation:</label>
        <input type="file" id="certificate" name="certificate" required><br> <br>
        <label for="registrationNumber">Registration Number:</label>
        <input type="text" id="registrationNumber" name="registrationNumber" value="{{ old('registrationNumber') }}" required>
        </div>
        <br>

        Extra Information:
        <br>
        <div style="border: 1px solid black; padding:10px">
        <label for="website">website:</label>
        <input type="text" id="website" name="website">
        <label for="phoneNumber">phoneNumber:</label>
        <input type="text" id="phoneNumber" name="phoneNumber" required>
        <label for="location">location:</label>
        <input type="text" id="location" name="location">
        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" cols="48"></textarea>

        </div>
        <br>

        <input type="submit" value="Register">
         <div>
	</form>
        </div>
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
