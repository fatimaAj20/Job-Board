<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Board</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body class="antialiased">
    @include('navbars.navBar')
        <div class="login-box job-details" style="margin-top: 0">
            <div style="float:right; text-align:center;">
                @if($job->vacant ==0)
                <h3 style="color:rgb(72, 244, 72);">Vacant</h3>
                @else
                <span style="color:rgb(255, 50, 50)">Occupied</span>
                @endif
                <p>Applicants: {{ $job->applied }}</p>
                <p>Job Location: {{ $job->location }}</p>
                <p>Salary: {{ $job->salary }}</p>
            </div>
            <h1>{{ $job->title }}</h1>

                <h4> Job Description: </h4>
                <p>{{ $job->description }}</p>

        </div>

        <div class="center" style="margin-bottom: 20px; width:auto">
            <a class="button rejected" href="/addJob/edit/{{ $job->id }}">Edit</a>
            <a class="button approved" href="/delete/{{ $job->id }}">Delete</a>
        </div>
</body>
</html>
