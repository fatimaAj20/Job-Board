@extends('navbars.navBarSeeker')

@section('content')
    <form class="login-box searchbox" method='post' action="{{ route('searchJobs') }}">
        @csrf
        <h2>Search Box </h2>
        <div class="user-box">
            <input type="text" id="location" name="location">
            <label for="location">Location:</label>
        </div>
        <div class="user-box">
            <input type="text" id="category" name="category">
            <label for="category">Industry:</label>
        </div>
        <div class="user-box">
            <input type="text" id="title" name="title">
            <label for="title ">title:</label>
        </div>
        <input type="submit" value="Submit">
    </form>
    <table>
        <thead>
            <tr>
                <th>Job Title</th>
                <th>Job Location</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jobs as $job)
                <tr>
                    <td>{{ $job->title }}</td>
                    <td>{{ $job->location }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
