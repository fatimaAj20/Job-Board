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
        <div class="center" style="margin-bottom: 20px">
            <a class="button rejected" href='/jobPosts?filter=1'>Occupied</a>
            <a class="button approved" href='/jobPosts?filter=0'>Vacant</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Location</th>
                    <th>Salary</th>
                    <th>Category</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($requests as $job)
                <tr>
                    <td><a href="/jobPosts/details/{{$job->id}}">{{ $job->title }}</a></td>
                    <td>{{ $job->description }}</td>
                    <td>{{ $job->location }}</td>
                    <td>{{ $job->salary }}</td>
                    <td>{{ $job->category }}</td>
                    <td><a href="/addJob/edit/{{ $job->id }}">Edit</a></td>
                    <td><a href="/delete/{{ $job->id }}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>