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
    <form action="/profile/store" method="POST">
        @csrf
        <label for="">Enter Your Name:*</label>
        <br>
        <input type="text" name="uname" placeholder="Name">
        <br>
        <small>
            @error('uname')
                {{ $message }}
            @enderror
        </small>
        <br>
        <input type="email" name="uemail" placeholder="Email">
        <br>
        <small>
            @error('uemail')
              {{ $message }}
            @enderror
        </small>
        <br>
        <input type="text" name="uphone" placeholder="Phone">
        <br>
        <small>
            @error('uphone')
               {{ $message }}
            @enderror
        </small>
        <br>
        <input type="text" name="uaddress" placeholder="Address">
        <br>
            <small>
                @error('uaddress')
                {{ $message }}
                @enderror
            </small>
        <br>
        <input type="text" name="ucountry" placeholder="Country">
        <br>
            <small>
            @error('ucountry')
                {{ $message }}
            @enderror
            </small>
        <br>
        <button type="submit">Save</button>
    </form>

</body>
</html>