<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>
    <table border=20>
        <tr>
            <td>id</td>
            <td>book_name</td>
            <td>update</td>
            <td>update</td>
        </tr>
        @foreach($user as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->book_name}}</td>
            <td><a href="{{route('book.update',['book'=>$user])}}">update</a></td>

           
            <td>
                <form action="{{route('book.destroy',['book' =>$user])}}" method="post">
                    @csrf
                    @method('delete')
                <input type="submit" value="delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </center>
</body>
</html>