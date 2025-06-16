<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>update</h1>

    <form action="{{route('book.update',['book'=>$book])}} "method="post">
        @csrf
        @method('put')
        <input type="number" name="id" id="" value="{{$book->id}}"readonly><br>  
        <input type="text" name="book_name" id="" value="{{$book->book_name}}"><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>