<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Penulis</title>
</head>
<body>
    <h1>Daftar Penulis</h1>
    <ul>
        @foreach ($authors as $author)
            <li>{{ $author['id'] }} - {{ $author['name'] }}</li>
        @endforeach
    </ul>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Penulis</title>
</head>
<body>
    <h1>Daftar Author</h1>
    <ul>
        @foreach ($authors as $author)
            <li>{{ $author->name }}</li>
        @endforeach
    </ul>
</body>
</html>
