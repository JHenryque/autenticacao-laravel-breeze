<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="{{ route('login') }}" method="post">
    @csrf
    <input type="email" name="email" placeholder="Email">
    <br>
    <input type="password" name="password" placeholder="Password">
    <br>
    <button type="submit">Login</button>
</form>

</body>
</html>
