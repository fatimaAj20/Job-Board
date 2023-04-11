@extends ('navbars.navBarSeeker')
@section('content')
<h3>Skills</h3>
    <ul>
      @foreach($user->skills as $skill)
        <li>{{ $skill}}</li>
      @endforeach
    </ul>
 <form action="{{route('addSkillForm')}}" method="POST">
    @csrf
    <label for="skill">Choose a Skill:</label>
    <select name="skill">
        @foreach($skills as $skill)
            <option value="{{ $skill->id }}">{{ $skill->name }}</option>
        @endforeach
    </select>
    <button type="submit">Add Skill</button>
</form>

@endsection
