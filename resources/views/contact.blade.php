<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <p>
        My name is {{ $name }}
    </p>
    <p>
        My name is {!! $name !!}
    </p>
    <p>
        {!! nl2br($post) !!}
    </p>
</body>
</html>