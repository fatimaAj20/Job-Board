<!DOCTYPE html>
<html>

<head>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <title>Login Page</title>
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
	<p>Don't have an account?<br>
        Regester as SEEKER <a href= {{ route('Sregester') }} > Create one</a><br>
        Regester as COMPANY <a href= {{ route('Eregester') }} > Create one</a></p>
</body>
</html>
