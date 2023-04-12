@extends ('navbars.navBarSeeker')

@section('content')
  <div style="height: 500px; overflow-y: scroll;">
    <h3>Skills</h3>
    <ul>
      @foreach($user->skills as $skill)
        <li>{{ $skill}}</li>
      @endforeach
    </ul>
    <div>
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
    </div>
  </div>
@endsection

