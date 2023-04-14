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

<body>
    @include('navbars.navBar')

    @if($matches ==1)
     <div class="flex-container">
        <h2 style="color:purple">The top candidates for this position are the following:</h2>
    </div>
    @endif
    <div class="flex-container" >
        <table style="width:30%">
            <thead>
                <tr>
                    <th>
                        Seeker Name
                    </th>

                    <th colspan="2">
                        Action
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($seekers as $seeker)
                    <tr>
                        <td><a href="/seeker.profile/{{ $seeker->id }}">{{$names[$seeker->id]}}</a></td>
                        <td colspan="2">
                            <div class="flex-container" style="margin: 0; padding:0">
                                @if($matches ==0)
                                <a class="rejected button" href="/reject/{{ $seeker->id }}?jobId={{$id}}">reject</a>
                                <a class="pending button" href="/intreview/{{ $seeker->id }}?jobId={{$id}}">interview</a>
                                @else
                                
                                <a class="pending button" href="/reject/{{ $seeker->id }}?jobId={{$id}}">Send Email</a>
                                @endif
                                
                            </div>

                    </tr>
                    </td>
                @endforeach
            </tbody>
        </table>
        
        @if ($matches == 0)
        <div>
                <form style="width:250px" class="form-box content-box" action='/viewApplications/{{ $id }}' method="post">
                    @csrf
                    <h2> Find best seeker matches for this position!</h2>
                    <input type="submit" value="Best Matches">
                </form>
        </div>
        @endif

    </div>
</body>

</html>
