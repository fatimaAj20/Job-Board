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

<body>
    @include('navbars.navBar')
    <div>
        @if($matches==0)
        <form action='/job/seekers/{{$id}}' method="post">
            @csrf
            <input type="submit" value="Best Matches">
        </form>
        @endif
    </div>
    <div class="container">
        @foreach ($seekers as $seeker)
            <br>
            <a href="/seekers/details/{{ $seeker->id }}">{{ $seeker->id }}</a>&nbsp;
            <a href="/reject/{{ $seeker->id }}">reject</a>&nbsp;
            <a href="/intreview/{{ $seeker->id }}">interview</a>&nbsp;

        @endforeach
    </div>

</body>
</html>