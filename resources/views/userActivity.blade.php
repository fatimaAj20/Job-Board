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
        <div class="flex-container" style="flex:1">
            <table style="width:400px">
                <thead>
                    <th colspan="3">
                        Event Type
                    </th>

                    <th>
                        Date of Action
                    </th>
                </thead>
                <tr>
                    @if (!is_null($events))
                        <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <td colspan="3">
                                        {{ $event->event_type }}
                                    </td>
                                    <td>
                                        {{ $event->created_at }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    @endif

            </table>
        </div>
        <div class="flex-container" style="margin: 50px">
            <form class="content-box form-box searchbox" action="/activity" method="post">
                @csrf

                <h2> Search Box</h2>
                <div class="user-box">
                    <input type="text" id="id" name="userId">
                    <label for="id"> Enter user Id</label>
                </div>
                <input type="submit" name="search" value="Search">
            </form>
        </div>
    </div>
</body>

</html>
