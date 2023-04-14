@extends ('navbars.navBarSeeker')
@section('content')
    <div class="flex-container">
        <div class="flex-container">
            <div class="form-box content-box" style="width:800px">
             
                <h2 class="profile-name">{{ $user->name }}</h2>
                <img style="float: right" height="150px" width="150px" src="{{ asset($user->profile_picture) }}" alt="Profile Picture">

                <form method="POST" action="{{ route('profileEdit') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="user-box" style="clear:right">
                        <br >
                        <label for="name">Name:</label> <br>

                        <input disabled type="text" id="name" name="name" value="{{ $user->name }}">
                    </div>
                    <div class="user-box">
                        <label for="about">About</label>
                        <br>
                        <textarea disabled id="about" name="about" rows="5">{{ $user->about }}</textarea>
                    </div>
                    <div class="user-box">
                        <label for="phone">Phone number:</label>
                        <br>
                        <input disabled type="text" id="phoneNumber" name="phoneNumber" value="{{ $user->phoneNumber }}">

                    </div>
                    <div class="user-box">
                        <label for="email">Email:</label>
                        <br>
                        <input disabled type="email" id="email" name="email" value="{{ $user->email }}">

                    </div>
                    <div class="user-box">
                        <label for="birthday">Birthday:</label>
                        <br>
                        <input disabled type="date" id="birthday" name="birthday" value="{{ $user->birthday }}">

                    </div>
                    <div class="user-box">
                        <label for="location">Location:</label>
                        <br>
                        <input disabled type="text" id="location" name="location" value="{{ $user->location }}">

                    </div>
                    <div class="user-box">
                        <a href="{{ asset($user->resume) }}" download>Download Resume</a>
                    </div>

                    <div class="user-box">
                        <h2>Skills:</h2>
                        <ul>
                            @foreach ($user->skills as $skill)
                                <li
                                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); padding:10px; display: inline-block; margin:30px;">
                                    {{ $skill }}</li>
                            @endforeach
                        </ul>
                    </div>
                      @if (Auth::check() && Auth::user()->role==3&& Auth::user()->id == $user->id)
                      <a href="{{ route('profileEdit') }}" class="button purple-button">Edit Profile</a>
                       @endif
                </form>
            </div>
        </div>
    </div>
@endsection
