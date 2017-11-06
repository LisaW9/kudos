<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kudos - @yield('title')</title>
</head>
<body>

<header>
    <nav>
        <a href="/home">home</a>
        <a href="/users">users</a>
        <a href="/compliments/given">given compliments</a>
        <a href="/compliments/received">received compliments</a>
    </nav>
</header>

<div class="container">
    @yield('content')
</div>

<footer>
    <p>&copy; Lisa Wouters - 2017</p>
</footer>

</body>
</html>