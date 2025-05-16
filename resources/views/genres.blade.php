<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Genre</title>
</head>
<body>
    <h1>Daftar Genre Buku</h1>
    <ul>
        @foreach ($genres as $genre)
            <li>{{ $genre['name'] }}</li>
            <li>{{ $genre['description'] }}</li>
        @endforeach
    </ul>
</body>
</html>
