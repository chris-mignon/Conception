<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Conception LMS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="/">Conception</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item"><a class="nav-link" href="/dashboard">Dashboard</a></li>
            <li class="nav-item">
                <form method="POST" action="/logout">@csrf <button class="btn btn-link nav-link">Logout</button></form>
            </li>
            @else
            <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
            @endauth
        </ul>
    </div>
  </div>
</nav>

<div class="container py-4">
    @yield('content')
</div>
</body>
</html>
