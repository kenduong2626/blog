<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post">
    @csrf
        Username
        <input type="text" name="username">
        Password
        <input type="password" name="password">
        <button type="submit">Login</button>
    </form>
</body>
</html>