<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad! - @yield('title','website')</title>
    <link rel="stylesheet" href="css/style.css">
    @stack('script')
</head>
<body>
    <header>
        <h1>My Blog</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/post">Post</a></li>
        </ul>
    </nav>
    @yield('contents')
    <aside>
        <h3>Sidebar</h3>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/post">Post</a></li>
            </ul>
        </nav>
    </aside>
    <footer>
        <p>&copy; Muhammad Hanif's Blog</p>
    </footer>


  



    </body>
    </html>