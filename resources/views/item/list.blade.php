<html>
<head>
    <title>とりあえずDBアクセス</title>
</head>
<body>
    <h1>とりあえずDBアクセス</h1>
    <table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Url</th>
        <th>Created</th>
        <th>Updated</th>
    </tr>
    @foreach($data as $val)
    <tr>
        <td>{{$val->id}}</td>
        <td>{{$val->name}}</td>
        <td>{{$val->price}}</td>
        <td>{{$val->url}}</td>
        <td>{{$val->created_at}}</td>
        <td>{{$val->updated_at}}</td>
    </tr>
    @endforeach
    </table>
</body>
</html>