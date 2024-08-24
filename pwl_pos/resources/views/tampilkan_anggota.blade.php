<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible"content="ie=edge">
        <title>data anggota</title>
    </head>
    <body>
        <h1>data anggota</h1>
       
            <table><tr>
                <th>nama</th>
                <th>nip</th>
                <th>tanggal lahir</th>
                <th>nilai</th></tr>
                @forelse ($anggota as $member)
                <tr>
                    <td>{{$member->nama}}</td>
                    <td>{{$member->nip}}</td>
                    <td>{{$member->tanggal_lahir}}</td>
                    <td>{{$member->nilai}}</td>
                </tr>
            </table>
        @empty
            <h1>tidak ada</h1>
        @endforelse
    </body>
</html>