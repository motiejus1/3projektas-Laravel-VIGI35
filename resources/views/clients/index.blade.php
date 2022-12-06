<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clients</title>
</head>
<body>
    <table>
        {{-- $clients - sitame faile yra matomas --}}
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Personal Code</th>
            <th>Address</th>
        </tr>
        @foreach ($clients as $client)
            <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->surname}}</td>
                <td>{{$client->personal_code}}</td>
                <td>{{$client->address}}</td>
            </tr>    
        @endforeach
    </table>
</body>
</html>