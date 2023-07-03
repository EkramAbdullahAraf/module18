<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
<h1>Posts</h1>

<table>
    <thead>
    <tr>
        <th>Title</th>
        <th>Category</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
