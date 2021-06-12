<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

    <center>
        <div class="container">
            <form action="" method="POST">
                @csrf
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama"><br>
                <label for="username"> Usename </label>
                <input type="text" id="username" name="username"><br>
                <label for="password"> Password </label>
                <input type="password" id="password" name="password"><br>
                <button type="submit">Login</button>
            </form>
        </div>
    </center>
    
</body>
</html>