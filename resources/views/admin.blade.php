<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Board</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body class="antialiased">
    @include('navbars.navBar')
    <div class="container">
        <div class="center" style="margin-bottom: 20px">
            <a class="button rejected" href='/admin?filter=0'>Rejected</a>
            <a class="button pending" href='/admin?filter=1'>Pending</a>
            <a class="button approved" href='/admin?filter=2'>Approved</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th colspan="3">Employers Registration Requests</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($requests as $request)
                    <tr>
                        <td> <a
                                href="/admin/employers/{{ $request->employerId }}">{{ $names[$request->employerId] }}</a>
                        </td>
                        @if ($request->status == 1)
                            <td>
                                <form method="post" action="{{ route('reject', $request->id) }}">
                                    {{ csrf_field() }}
                                    <input class="rejected button" type="submit" name="reject" value="reject">
                                </form>

                            </td>

                            <td>
                                <form method="post" action="{{ route('approve', $request->id) }}">
                                    {{ csrf_field() }}
                                    <input class="approved button" type="submit" name="approve" value="approve">
                                </form>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>


</html>
