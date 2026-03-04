<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,tr,td{
            border: 1px solid #000;
        }
        table{
            width: 700px;
            margin: auto
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Address</td>
            <td>Country</td>
            <td>Date</td>
        </tr>
        {{-- <pre>
            {{dd($employees)}}
        </pre> --}}
        @foreach ($employees as $employe)    
        <tr>
            <td>{{$employe->id}}</td>
            <td>{{$employe->name}}</td>
            <td>{{$employe->email}}</td>
            <td>{{$employe->address}}</td>
            <td>{{$employe->country}}</td>
            <td>{{$employe->created_at}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>