<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WELCOMEEEEEEEEEEEEEEEEE</h1>

    <form action="{{route('user.use')}}" method="post">
        @csrf
        @method('post')
        <input type="text" name="book_name" id=""><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>