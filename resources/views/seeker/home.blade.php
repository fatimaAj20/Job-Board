@extends('navbars.navBarSeeker')
@section('content')
<form method='post' action="{{ route('searchJobs') }}">
    @csrf
  <label for="location">Location:</label>
  <input type="text" id="location" name="location"><br>

  <label for="industry">category:</label>
  <input type="text" id="category" name="category"><br>

  <label for="title ">title:</label>
  <input type="text" id="title" name="title"><br>

  <input type="submit" value="Submit">


</form>
@endsection

