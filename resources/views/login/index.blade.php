<!DOCTYPE html>
<html>

<head>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <title>Login Page</title>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="{{ route('authentication') }}" method="POST">
            @csrf
            <div class="user-box">
                <input type="email" id="email" name="email" required value=''>
                <label>Email</label>
            </div>
            <div class="user-box">
                <input type="password" id="password" name="password" required value=''>
                <label>Password</label>
            </div>
            <input type="submit" value="Login">
        </form>
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="error">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>
</html>
