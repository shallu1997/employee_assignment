<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Employee Management')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Add your stylesheets, scripts, or other head elements here -->
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('employees.index') }}">Employee Listing</a></li>
            <li><a href="{{ route('employees.create') }}">Add Employee</a></li>
            <!-- Add more navigation links as needed -->
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <!-- Add your scripts or other footer elements here -->
</body>
</html>
