<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <th>S1</th>
        <th>Title</th>
        <th>Description</th>
        <th>View</th>
        <th>Download</th>
    </tr>
    @foreach($files as $key=>$data)
        <tr>
            <td>{{++$key}}</td>
            <td>{{$data->title}}</td>
            <td>{{$data->description}}</td>
            <td><a href="/files/{{$data->id}}">View</a></td>
            <td><a href="/file/download/{{$data->file}}">Download</a></td>
        </tr>
    @endforeach
</table>
</body>
</html>
