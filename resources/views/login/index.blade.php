<!DOCTYPE html>
<html>

<head>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <title>Login Page</title>
</head>

<body>

    <div class="content-box login-box form-box">
        <form action="{{ route('authentication') }}" method="POST">
            <h1>Login Page</h1>
            @csrf
            <div class="user-box">
                <input type="email" id="email" name="email" required value=''>
                <label for="email">Email:</label>
			</div>
            <div class="user-box">
                <input type="password" id="password" name="password" required value=''>
                <label for="password">Password:</label>
			</div>
            <input type="submit" value="Login">
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
        <p>Don't have an account?</p>
        <a href={{ route('Sregester') }}>Register as <span style="text-decoration: underline">SEEKER </span></a>
        <a href={{ route('Eregester') }}> Register as <span style="text-decoration: underline">COMPANY</span></a>
    </div>
</body>

</html>
