<!DOCTYPE html>
<html>

<head>
    <title>Register Page</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <div class="login-box">
        <h2>Register Page</h2>
        <form action="{{ route('regesterCompany') }}" method="POST">
            @csrf
            <div class="user-box">
                <input type="text" id="companyName" name="companyName" value="{{ old('companyName') }}" required>
                <label for="first_name">Company Name</label>
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
            <br>
            <input type="submit" value="Register">
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
