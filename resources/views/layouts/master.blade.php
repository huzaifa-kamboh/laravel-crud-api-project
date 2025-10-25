<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel CRUD')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f8ff;
        }
        .navbar {
            background-color: #0056b3 !important;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .navbar-brand, .nav-link {
            color: white !important;
            font-weight: 500;
        }
        .nav-link:hover {
            color: #dfefff !important;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        footer {
            background-color: #0056b3;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 40px;
            font-size: 0.95rem;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/students">Silver Point Communication </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="/students" class="nav-link">Home</a></li>
                    <li class="nav-item">
                        @if (Request::is('students'))
                            <a href="{{ route('students.create') }}" class="nav-link">Create New Student</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 pt-4">
        @yield('content')
    </div>

    <footer>
        <p> &copy; {{ date('Y') }} First CRUD App | Developed by <b>Huzaifa Nadeem</b></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
