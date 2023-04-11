<!DOCTYPE html>
<html>

<head>
    <title>Job Board</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <div class="login-box">
        @if ($view==1)
            <form action='/employer/profile/edit/{{$employer->id }}' method="POST">
        @else
            <form action="/employer/profile/{{$employer->id}}" method="POST">
        @endif
        @csrf
		<div class="user-box">
			<input type="text" id="link" name="link" value="{{ $employer->websiteLink}}" required>
			<label for="title"> Website Link:</label>
		</div>
		<div class="user-box">
			<textarea placeholder="description" id="description" name="description" rows="5" cols="50" required>{{ $employer->description }}</textarea>
		</div>
		<div class="user-box">
			<input type="text" id="location" name="location" value="{{$employer->location }}" required>
			<label for="location">Location:</label>
		</div>
		<div class="user-box">
			<input type="text" id="lebanonCreftificateOfIncorporation " name="lebanonCreftificateOfIncorporation" value="{{$employer->lebanonCreftificateOfIncorporation }}" required>
			<label for="lebanonCreftificateOfIncorporation">lebanon Creftificate of Incorporation:</label>
		</div>
		<div class="user-box">
			<input type="text" id="registrationNumber " name="registrationNumber" value="{{$employer->registrationNumber }}" required>
			<label for="registrationNumber">Registration Number:</label>
		</div>

		<div class="user-box">
			<input type="text" id="logo" name="logo" value="{{ $employer->logo  }}" required>
			<label for="logo">Logo:</label>
		</div>
       <br>
       @if ($view==1)
       <input type="submit" value="Edit">
   @else
        <input type="submit" value="Done">
   @endif
        </form>
    </div>
</body>
</html>
