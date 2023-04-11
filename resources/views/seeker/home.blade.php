@extends('navbars.navBarSeeker')
@section('content')
<h1 style="display:inline-block; margin-left:30%; margin-top:5%; color: #22252e"> Welcome {{ Auth::user()->name }}!</h1>

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
@endsection

