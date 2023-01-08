<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larvel || Project</title>
    <link rel="stylesheet" href={{ asset('css/styles.css') }}>
    <link rel="icon" type="image/x-icon" href="https://laravel.com/img/favicon/favicon-16x16.png">
</head>

<body>
    <nav class="nav-bar">
        <a class="nav-brand" href="/">
            <img src="https://laravel.com/img/favicon/apple-touch-icon.png" alt="" class="brand">
        </a>
        <ul class="links">
            <li class="nav-items">
                <a href="/user" class="nav-links">User</a>
            </li>
        </ul>
    </nav>
    <main>
        {{ $slot }}
    </main>
</body>

</html>
