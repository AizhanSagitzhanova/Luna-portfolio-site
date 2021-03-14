<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new Blog</title>
</head>
<body>
    <form method="POST" action="{{ route('add-post') }}">
        @csrf
        <input type="text" name="name" placeholder="title">
        <input type="text" name="surname" placeholder="body">
        <input id="send" type="submit" value="Send">
    </form>
</body>
</html>