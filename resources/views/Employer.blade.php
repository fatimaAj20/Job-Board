<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <title>Job Board</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
</head>

<body class="antialiased">
    @include('navbars.navBar', ['employer' => $employer])
    <div class="flex-container">
        <h1 style="color: #22252e"> Welcome {{ Auth::user()->name }}!</h1>
    
    </div>
    <div class="flex-container">
        <div class="cards">
            <div class="card" onclick="location.href='/jobPosts'">
                <p>
                    Job Posts
                </p>
                <img src="{{ asset('images/job_application.webp') }}" alt="Card image">
            </div>
            <div class="card" onclick="location.href='/Employernotifications'">
                <p>
                    Job Notifications
                </p>
                <img src="{{ asset('images/bell.jpg') }}" alt="Card image">
            </div>
            <div class="card" onclick="location.href='/addJob'">
                <p>
                    Add Job
                </p>
                <img src="{{ asset('images/job_create.jpg') }}" alt="Card image">
            </div>
        </div>
    </div>

</body>

</html>
