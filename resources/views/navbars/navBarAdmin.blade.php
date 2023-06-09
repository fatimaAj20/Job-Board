<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Board</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <nav class="sidebar-navigation">
        <h1>Job Board</h1>
        <ul>
            <li>
                <a href="/admin"><i class="fa fa-home"></i> </a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <a href="/activity"><i class="fa fa-magnifying-glass"></i> </a>
                <span class="tooltip">Search User Activity</span>
            </li>
            <li>
                <a href="/logout"><i class="fa fa-sign-out"></i> </a>
                <span class="tooltip">Logout</span>
            </li>
        </ul>
    </nav>
</body>

</html>