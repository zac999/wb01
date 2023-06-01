<!DOCTYPE html>
<html>

<head>
  <title>@yield('title', 'Wb01 App') - Laravel 入门学习</title>
  <link rel="stylesheet" href="/css/app.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Wb01 App</a>
      <ul class="navbar-nav justify-content-end">
        <li class="nav-item"><a class="nav-link" href="/help">帮助</a></li>
        <li class="nav-item"><a class="nav-link" href="#">登录</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    @yield('content')
  </div>
</body>

</html>
