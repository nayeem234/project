
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Login</h1>
        <form accept="/login" method="post">
            @csrf
        Email:<input type="text" name="email"><br>
        Password:<input type="password" name="password"><br/>
        <input type="submit" value="login"/>
        </form>

    </body>
    </html>


 </body>
 </html>
