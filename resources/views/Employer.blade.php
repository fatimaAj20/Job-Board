<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <title>Job Board</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
</head>

<body class="antialiased">
    
    @include('navbars.navBar')
    <div class="container">
        <a href='/jobPosts'>JobPosts</a>&nbsp;&nbsp;
        <a href='/jobRequests'>JobRequests</a>&nbsp;&nbsp;
        <a href='/addJob'>AddJob</a>
    </div>
</body>

</html>