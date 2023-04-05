@extends('navbars.navBarSeeker')

<form method='post' action="{{ route('searchJobs') }}">
  <label for="location">Location:</label>
  <input type="text" id="location" name="location"><br>

  <label for="industry">Industry:</label>
  <input type="text" id="industry" name="industry"><br>

  <label for="title ">Industry:</label>
  <input type="text" id="title" name="title"><br>

  <input type="submit" value="Submit">


  <div class="job-post-list">
  @foreach ($jobs as $job)
    <div class="job-post-box">
      <h3 class="job-title">{{ $job->title }}</h3>
      <p class="job-location">{{ $job->location }}</p>
    </div>
  @endforeach
</div>
