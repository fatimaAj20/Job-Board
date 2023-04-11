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
    
    @include('navbars.navBar',["employer"=>$employer])
    <div class="container">
        <h1> Welcome {{Auth::user()->name}}!</h1>

        <div class="cards">
            <div class="card">
                <a href='/jobPosts'>Job Posts</a>
                <img src="{{ asset('images/job_posting.webp') }}" alt="Card image">
            </div>
            <div class="card">
                
        <a href='/jobRequests'>Job Requests</a>
        <img src="{{ asset('images/job_application.webp') }}" alt="Card image">
            </div>
            <div class="card">

                <a href='/addJob'>Add Job</a>
                <img src="{{ asset('images/job_create.jpg') }}" alt="Card image">
            </div>
          </div>
    </div>
</body>

</html>