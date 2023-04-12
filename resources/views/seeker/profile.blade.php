@extends ('navbars.navBarSeeker')
@section('content')

<div class="user-profile">
  <div class="profile-header">
    <img src="{{ asset($user->profile_picture) }}" alt="Profile Picture">
    <h2 class="profile-name">{{ $user->name }}</h2>
  </div>
  <div class="contact-information">
    <h3>Contact Information</h3>
    <ul>
      <li>Phone Number: {{ $user->phoneNumber }}</li>
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
    <a href="{{ asset($user->resume) }}" download>Download Resume</a>
  </div>

  @if (Auth::check() && Auth::user()->id == $user->id)
  <a href="{{ route('profileEdit') }}" class="edit-profile-button">Edit Profile</a>
   @endif
</div>
@endsection
