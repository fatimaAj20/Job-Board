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
    <div class="flex-container">
        <table>
            <thead>
                <tr>
                    <th colspan="4">Message</th>
                    <th colspan="1">Time</th>
                </tr>
            </thead>
            <tbody>
                @if (!is_null($notifications))
                    @foreach ($notifications as $notification)
                        <tr>
                            <td colspan="4">{{ $notification->message }}</td>
                            <td>{{ $notification->created_at }}</td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
        @endif
    </div>
</body>

</html>
