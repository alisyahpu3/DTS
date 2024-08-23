<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>DB FACADE</title>
    </head>
    <body>
        <h1>DATA USER</h1>
        <table border ="1" cellpadding ="2" cellspacing ="0">
            <tr>
                <th>ID</th>
                <th>KODE LEVEL</th>
                <th>nama level</th>
            </tr>
            @foreach($data as $d)
            <tr>
                <td>{{$d->level_id}}</td>
                <td>{{$d->level_kode}}</td>
                <td>{{$d->level_nama}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>