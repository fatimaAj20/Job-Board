@extends ('navbars.navBarSeeker')
@section('content')
    <div class="flex-container">

        <div class="flex-container">
            <div class="form-box content-box" style="width:600px">
                <h1>Profile Details</h1>
                <form method="POST" action="{{ route('seekeredit') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="user-box">
                        <input type="text" id="name" name="name" value="{{ $user->name }}">
                        <label for="name">Name:</label> <br>
                    </div>
                    <div class="user-box">
                        <label for="about">About</label>
                        <br>
                        <textarea id="about" name="about" rows="5">{{ $user->about }}</textarea>
                    </div>
                    <div class="user-box">
                        <input type="text" id="phoneNumber" name="phoneNumber" value="{{ $user->phoneNumber }}">
                        <label for="phone">Phone number:</label>

                    </div>
                    <div class="user-box">
                        <input type="email" id="email" name="email" value="{{ $user->email }}">
                        <label for="email">Email:</label>

                    </div>
                    <div class="user-box">
                        <input type="date" id="birthday" name="birthday" value="{{ $user->birthday }}">
                        <label for="birthday">Birthday:</label>

                    </div>
                    <div class="user-box">
                        <input type="file" id="profile_picture" name="profile_picture"
                            value="{{ $user->profile_picture }}">
                        <label for="profile_picture">Profile picture:</label>

                    </div>
                    <div class="user-box">
                        <input type="text" id="location" name="location" value="{{ $user->location }}">
                        <label for="location">Location:</label>

                    </div>
                    <div class="user-box">
                        <input type="file" id="resume" name="resume">
                        <label for="resume">Resume:</label>

                    </div>

                    <div class="user-box">
                        <h2>Skills:</h2>
                        <ul>
                            @foreach ($user->skills as $skill)
                                <li style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); padding:10px; display: inline-block; margin:30px;">{{ $skill }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <input type="submit" value="Save changes" >
                </form>
            </div>
        </div>

        <div style="margin: 100px">

            <div class="content-box form-box">
                <form action="{{ route('addSkillForm') }}" method="POST">
                    @csrf
                    <div class="user-box">
                        <label for="skill">Choose a Skill:</label>
                        <br>
                        <br>
                        <select name="skill">
                            @foreach ($skills as $skill)
                                <option style="color: purple" value="{{ $skill->id }}">{{ $skill->name }}</option>
                            @endforeach
                        </select>
                        <br>
                    </div>
                    <input type="submit" value="Add Skill">
                </form>
            </div>
        </div>
    @endsection
