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
    <div class="container">
        <a href='/jobPosts?filter=1'>occupied</a>&nbsp;&nbsp;
        <a href='/jobPosts?filter=0'>vacant</a>&nbsp;&nbsp;
        @foreach ($requests as $request)
            <br>
            <a href="/jobPosts/details/{{ $request->id }}">{{ $request->title }}</a>
        @endforeach
    </div>
</body>
</html>
