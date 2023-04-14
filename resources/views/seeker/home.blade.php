@extends('navbars.navBarSeeker')

@section('content')
<div class="flex-container">
    <h1 style="color: #22252e"> Welcome {{ Auth::user()->name }}!</h1>

</div>

<div class="flex-container">
    
    <div class="flex-container" style="flex:1">
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
                        <td><a href="jobPosts/details/{{$job->id}}">{{ $job->title }}</a></td>
                        <td>{{ $job->location }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <form class="content-box searchbox form-box" method='post' action="{{ route('searchJobs') }}">
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

</div>

@endsection
