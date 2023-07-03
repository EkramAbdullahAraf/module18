<!DOCTYPE html>
<html>
<head>
    <title>Latest Posts</title>
</head>
<body>
<h1>Latest Posts</h1>

<table>
    <thead>
    <tr>
        <th>Category</th>
        <th>Latest Post</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>{{ $category->latestPost ? $category->latestPost->title : 'No post available' }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
