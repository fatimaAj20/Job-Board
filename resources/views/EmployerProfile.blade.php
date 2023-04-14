<!DOCTYPE html>
<html>

<head>
    <title>Job Board</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>
	@include('navbars.navBar')
    <div class="login-box form-box content-box" style="margin-top:0">

        @if (Auth::user()->role==2 && $view==1)
            <form action='/employer/profile/edit/{{$employer->id }}' method="POST">
        @else
            <form action="/employer/profile/{{$employer->id}}" method="POST">
        @endif
        @csrf
		<div class="user-box">
			<input type="text" id="link" name="link" value="{{ $employer->websiteLink}}" >
			<label for="title"> Website Link:</label>
		</div>
		<div class="user-box">
			<textarea placeholder="description" id="description" name="description" rows="5" cols="50" >{{ $employer->description }}</textarea>
		</div>
		<div class="user-box">
			<input type="text" id="location" name="location" value="{{$employer->location }}" >
			<label for="location">Location:</label>
		</div>
		<div class="user-box">
			<label for="lebanonCreftificateOfIncorporation">lebanon Creftificate of Incorporation:</label>
			<br><br>
			<input type="file" id="lebanonCreftificateOfIncorporation " name="lebanonCreftificateOfIncorporation" value="{{$employer->lebanonCreftificateOfIncorporation }}" >
		</div>
		<div class="user-box">
			<input type="text" id="registrationNumber " name="registrationNumber" value="{{$employer->registrationNumber }}" >
			<label for="registrationNumber">Registration Number:</label>
		</div>

		<div class="user-box">
			<label for="logo">Logo:</label>
<br><br>
			<input type="file" id="logo" name="logo" value="{{ $employer->logo  }}" >
		</div>
       <br>
	   @if(Auth::user()->role==2)
       @if ($view==1)
       <input type="submit" value="Edit">
   @else
        <input type="submit" value="Done">
   @endif
   @endif
        </form>
    </div>
</body>
</html>
