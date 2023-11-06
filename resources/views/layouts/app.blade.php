<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PBKK4</title>
    <!-- Your additional stylesheets or scripts -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #f8f9fa;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #e9ecef;
            padding: 10px;
            text-align: center;
        }

        nav a {
            margin-right: 20px;
            text-decoration: none;
            color: #495057;
        }

        .container {
            margin: 20px;
        }
    </style>
</head>
<body>

<header>
    <h1>Tugas PBKK4</h1>
</header>

<nav>
    <a href="{{ route('faculty.index') }}">Fakultas</a>
    <a href="{{ route('study_programs.index') }}">Program Studi</a>
    <!-- Add more navigation items as needed -->
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>
