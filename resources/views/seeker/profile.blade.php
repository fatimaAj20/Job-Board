@extends ('navbars.navBarSeeker')
@section('content')
<div class="user-profile">
  <div class="profile-header">
    <img src="{{ $user->profile_picture }}" alt="Profile Picture">
    <h2 class="profile-name">{{ $user->name }}</h2>
  </div>
  <div class="contact-information">
    <h3>Contact Information</h3>
    <ul>
      <li>Phone Number: {{ $user->phone_number }}</li>
      <li>Email: {{ $user->email }}</li>
    </ul>
  </div>
  <div class="about-section">
    <h3>About</h3>
    <p>{{ $user->about }}</p>
  </div>
  <div class="skills-section">
    <h3>Skills</h3>
    <ul>
      @foreach($user->skills as $skill)
        <li>{{ $skill}}</li>
      @endforeach
    </ul>
    <a href="{{ $user->resume_link }}" download>Download Resume</a>
  </div>

  <a href="{{ route('profileEdit') }}" class="edit-profile-button">Edit Profile</a>
</div>
@endsection
