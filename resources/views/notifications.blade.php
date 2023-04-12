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
        <form action="/activity" method="post">
            @csrf
            check user activity:
            <input type="text" id="id" name="userId" >
			<label for="id"> Enter user Id</label>
            <input type="submit" name="done" value="Done">
        </form>
        @if(!is_null($notifications))
        <table>
            <tr>
                @foreach($notifications as $notification)
                <td>{{ $notification->message }}</td>
                    {{$notification->isRead=1}}
                @endforeach
            </tr>
        </table>
        @endif
    </div>
</body>
</html>
