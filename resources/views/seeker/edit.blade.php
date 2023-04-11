@extends ('navbars.navBarSeeker')
@section('content')
<form method="POST" action="{{ route('seekeredit') }}" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="name">Name:</label> <br>
    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
  </div>
  <div class="form-group">
  <label for="about">About</label>
  <textarea class="form-control" id="about" name="about" rows="5">{{ $user->about }}</textarea>
  </div>
  <div class="form-group">
    <label for="phone">Phone number:</label>
    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" value="{{ $user->phoneNumber }}">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
  </div>
  <div class="form-group">
    <label for="birthday">Birthday:</label>
    <input type="date" class="form-control" id="birthday" name="birthday" value="{{ $user->birthday }}">
  </div>
  <div class="form-group">
    <label for="profile_picture">Profile picture:</label>
    <input type="file" class="form-control" id="profile_picture" name="profile_picture" value="{{$user->profile_picture}}">
  </div>
  <div class="form-group">
    <label for="location">Location:</label>
    <input type="text" class="form-control" id="location" name="location" value="{{ $user->location }}">
  </div>
  <div class="form-group">
    <label for="resume">Resume:</label>
    <input type="file" class="form-control" id="resume" name="resume">
  </div>
  <button type="submit" class="btn btn-primary">Save changes</button>
</form>
<h3>Skills</h3>
    <ul>
      @foreach($user->skills as $skill)
        <li>{{ $skill}}</li>
      @endforeach
    </ul>
    <a href="{{route('addSkillForm')}}" class="edit-profile-button">add skill</a>
@endsection




