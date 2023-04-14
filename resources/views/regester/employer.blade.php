<!DOCTYPE html>
<html>

<head>
    <title>Register Page</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>

    <div class="flex-container">
        <h1>Registeration Page</h1>
    </div>
    <div class="flex-container">
        <div class="content-box form-box registerationBox">
            <h2>Basic Details<h2>
                    <form action="{{ route('Eregester') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="user-box">
                            <input type="text" id="companyName" name="companyName" value="" required><br>
                            <label for="companyName">Company Name</label>
                        </div>
                        <div class="user-box">
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                required><br>
                            <label for="email">Email</label>

                        </div>
                        <div class="user-box">
                            <input type="password" id="password" name="password" required><br>
                            <label for="password">Password</label>
                        </div>
                        <div class="user-box">
                            <input type="password" id="password_confirmation" name="password_confirmation" required><br>
                            <br>
                            <label for="password_confirmation">Confirm Password</label>

                        </div>
        </div>
        <div class="content-box registerationBox form-box">
            <h2>Authentication Documentation<h2>
                    <div class="user-box">
                        <label for="certificate">Lebanon Certificate Of Incorporation</label>
                        <br>
                        <input type="file" id="certificate" name="certificate" required><br> <br>
                    </div>
                    <div class="user-box">
                        <input type="text" id="registrationNumber" name="registrationNumber"
                            value="{{ old('registrationNumber') }}" required>
                        <label for="registrationNumber">Registration Number</label>

                    </div>

        </div>
        <div class="content-box registerationBox form-box">
            <h2>Extra Information<h2>
                    <br>
                    <div class="user-box">
                        <input type="text" id="website" name="website"  value="{{ old('website') }}" required>
                        <label for="website">Website</label>
                    </div>
                    <div class="user-box">
                        <input type="text" id="phoneNumber" name="phoneNumber" required>
                        <label for="phoneNumber">Phone Number</label>
                    </div>
                    <div class="user-box">
                        <input type="text" id="location" name="location" required>
                        <label for="location">Location</label>
                    </div>
                    <div class="user-box">
                        <textarea id="description" placeholder="Description" name="description" rows="4" cols="48"></textarea>
                    </div>

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
    </div>

    <div class="flex-container form-box" style="margin-top:100px">
        <input type="submit" value="Register">
        </form>
    </div>

</body>

</html>
