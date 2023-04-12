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
        <table>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Location</th>
                <th>Salary</th>
                @if ($job->vacant == 0)
                    <th>Applicants</th>
                @endif
                <th>Vacant</th>
                <th>Category</th>
                <th>Skills</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <tr>
                <td>{{ $job->title }}</td>
                <td>{{ $job->description }}</td>
                <td>{{ $job->location }}</td>
                <td>{{ $job->salary }}</td>
                @if ($job->vacant == 0)
                    <td>{{ $job->applied }}</td>
                @endif
                <td>{{ $job->vacant }}</td>
                <td>{{ $job->category }}</td>
                <td>{{ $skills}}</td>
                <td><a href="/addJob/edit/{{ $job->id }}">Edit</a></td>
                <td><a href="/delete/{{ $job->id }}">Delete</a></td>
            </tr>
        </table>
    </div>
</body>
</html>
