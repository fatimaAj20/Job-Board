<!DOCTYPE html>
<html>

<head>
    <title>Job Board</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>
	@include('navbars.navBar')
	<div class="flex-container">
		<div class="login-box content-box form-box">
			<h2>Job to Post</h2>
			@if (is_null($job))
				<form action="{{ route('createJob') }}" method="POST">
			@else
				<form action="/addJob/edit/{{ $job->id }}" method="POST">
			@endif
			@csrf
			<div class="user-box">
				<input type="text" id="title" name="title" value="{{ is_null($job) ? null : $job->title }}" required>
				<label for="title"> Title</label>
			</div>
			<div class="user-box">
				<textarea placeholder="Enter job description here" id="description" name="description" rows="5" cols="50" required>{{ is_null($job) ? null : $job->description }}</textarea>
			</div>
			<div class="user-box">
				<input type="text" id="location" name="location" value="{{ is_null($job) ? null : $job->location }}" required>
				<label for="location">Location:</label>
			</div>
			<div class="user-box">
				<input type="number" id="salary" name="salary" value="{{ is_null($job) ? null : $job->salary }}" required>
				<label for="salary">Salary:</label>
			</div>
			<div class="user-box">
				<input type="number" id="vacant" name="vacant" value="{{ is_null($job) ? 0 : $job->vacant }}" required>
				<label for="vacant">Vacant:</label>
			</div>		
			<div class="user-box">
				<label for="skills">Skills:</label>
				<br>
				<select name="skills[]" id="skills" multiple size="3">
				@foreach($skills as $skill )
				<option value="{{$skill->name}}" @if (!is_null($job)) @foreach($requiredSkills as $reqSkill) @if($reqSkill->skillId == $skill->id) selected="selected"  @endif @endforeach @endif>{{$skill->name}}</option>
				@endforeach
				</select> 
			</div>
			<div class="user-box">
				<input type="text" id="category" name="category" value="{{ is_null($job) ? null : $job->category }}" required>
				<label for="category">Category:</label>
			</div>
		   <br>
			<input type="submit" value="Done">
			</form>
		</div>
	</div>

</body>

</html>
