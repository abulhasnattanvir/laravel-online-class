<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        small{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Edit Page</h1>
    <a href="/profile/view">View Page</a>

    @if($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif

    <form action="{{route('employe.update', $data->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Enter Your Name:*</label>
        <br>
        <input type="text" name="uname"  value="{{old('uname', $data->name)}}" >
        <br>
        <small>
            @error('uname')
                {{ $message }}
            @enderror
        </small>
        <br>
        <input type="email" name="uemail" value="{{old('uemail', $data->email)}}"  >
        <br>
        <small>
            @error('uemail')
              {{ $message }}
            @enderror
        </small>
        <br>
        <input type="text" name="uphone" value="{{old('uphone', $data->phone)}}" >
        <br>
        <small>
            @error('uphone')
               {{ $message }}
            @enderror
        </small>
        <br>
        <input type="text" name="uaddress" value="{{old('uaddress', $data->address)}}">
        <br>
            <small>
                @error('uaddress')
                {{ $message }}
                @enderror
            </small>
        <br>
        <input type="text" name="ucountry" value="{{old('ucountry', $data->country)}}">
        <br>
            <small>
            @error('ucountry')
                {{ $message }}
            @enderror
            </small>
        <br>
        <button type="submit">Update</button>
    </form>

</body>
</html>