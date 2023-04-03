<!DOCTYPE html>
<html>

<head>
    <title>Register Page</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <div class="login-box">
        <h2>Register Page</h2>
        <form action="{{ route('Sregester') }}" method="POST">
            @csrf
            <div class="user-box">
                <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                <label for="first_name">First Name</label>

            </div>
            <div class="user-box">
                <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                <label for="last_name">Last Name</label>

            </div>
            <div class="user-box">
                <input type="number" id="phoneNumber" name="phoneNumber" value="{{ old('phoneNumber') }}" required>
                <label for="phoneNumber">Phone Number:</label>
            </div>
            <div class="user-box">
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                <label for="email">Email</label>

            </div>
            <div class="user-box">
                <input type="password" id="password" name="password" required>
                <label for="password">Password</label>
			</div>
            <div class="user-box">
                <input type="password" id="password_confirmation" name="password_confirmation" required>
                <label for="password_confirmation">Confirm Password</label>
			</div>
            <div>
                <label for="role">{{ __('Register as') }}</label>
                <div class="user-box">
                    <select id="role" name="role">
                        <option value="3">{{ __('Job Seeker') }}</option>
                        <option value="2">{{ __('Company') }}</option>
                    </select>
                </div>
            </div>
            <br>
            <input type="submit" value="Register">
            <div>
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
    </div>

</body>

</html>
