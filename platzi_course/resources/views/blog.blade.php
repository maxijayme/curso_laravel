<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    @foreach($posts as $post)
        <p>
            <strong>{{ $post['id'] }}</strong>
            <a href="">{{$post['title']}}</a>
        </p>
    @endforeach
</body>
</html>
